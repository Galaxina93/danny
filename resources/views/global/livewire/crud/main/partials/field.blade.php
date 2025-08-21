@php
    $type = $this->config['fields'][$attribute]['type'];
    $component = match($type) {
        'color'     => 'components.forms.color',
        'range'     => 'components.forms.range',
        'select'    => 'components.forms.select',
        'divider_1' => 'components.forms.divider',
        'password'  => 'components.forms.password',
        'textarea'  => 'components.forms.textarea',
        'checkbox'  => 'components.forms.checkbox',
        'roleGrid'  => 'components.forms.role-grid',
        default     => 'components.forms.input',
    };
    $rangeProps = $type === 'range' ? [
        'min_range' => $this->config['fields'][$attribute]['min_range'],
        'max_range' => $this->config['fields'][$attribute]['max_range'],
    ] : [];
    $selectProps = $type === 'select' ? [
        'options' => $this->config['fields'][$attribute]['options'],
    ] : [];
    $roleGridProps = $type === 'roleGrid' ? [
        'data' => $this->config['fields'][$attribute]['data'],
        'selectedPermission' => $this->selectedPermission,
    ] : [];

    // Prüfen, ob das Feld eine Beziehung hat
    if (isset($this->config['fields'][$attribute]['relation'])) {
        $model = "record.{$this->config['fields'][$attribute]['relation']}.{$attribute}";
    } else {
        $model = "record.{$attribute}";
    }
@endphp

@component($component, array_merge([
    'type' => $type,
    'id' => $attribute ?? '',
    'variable' => $model ?? '',
    'class' => $this->config['fields'][$attribute]['class'] ?? '',
    'required' => $this->config['fields'][$attribute]['required'] ?? '',
    'placeholder' => $this->config['fields'][$attribute]['placeholder'] ?? '',
    'title' => $this->config['fields'][$attribute]['translation'] ?? ucfirst($attribute),
], $rangeProps, $selectProps, $roleGridProps))
@endcomponent
