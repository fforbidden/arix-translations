<?php

return [
    'account-overview' => 'Account Overview',
    'twofactor-messagebox' => 'Your account must have two-factor authentication enabled in order to continue.',
    'apikey' => 'مفتاح API',
    'sshkey' => 'مفتاح SSH',

    'update-password' => [
        'current' => 'كلمة المرور الحالية',
        'new' => 'كلمة المرور الجديدة',
        'requirements' => 'يجب أن تتكون كلمة المرور الجديدة من 8 أحرف على الأقل وأن تكون فريدة لهذا الموقع.',
        'confirm' => 'تأكيد كلمة مرور جديدة',
        'update' => 'تحديث كلمة المرور',
    ],

    'update-email' => [
        'isUpdated' => 'تم تحديث البريد الإلكتروني الأساسي',
        'update' => 'تحديث البريد الإلكتروني',
        'email' => 'البريد الإلكتروني',
        'confirm' => 'تأكيد كلمة المرور',
    ],

    'appearance' => [
        'title' => 'المظهر',
        'lightDarkMode' => 'الوضع الفاتح/الداكن',
        'light' => 'الفاتح',
        'dark' => 'الداكن',
        'language' => 'لغة اللوحة',
        'panel-sounds' => 'أصوات اللوحة',
        'on' => 'تشغيل',
        'off' => 'إيقاف',
    ],

    'twofactor' => [
        'title' => 'التحقق بخطوتين',
        'isEnabled' => 'التحقق بخطوتين مفعّل حاليًا في حسابك.',
        'isDisabled' => 'لم يتم تمكين التحقق بخطوتين حاليًا في حسابك. انقر فوق الزر أدناه لبدء تفعيله.',
        'disable' => 'تعطيل التحقق بخطوتين',
        'enable' => 'تفعيل التحقق بخطوتين',
        
        'disable-dialog' => [
            'password' => 'كلمة المرور',
            'cancel' => 'إلغاء',
            'must-enter-password' => 'You must enter your account password to continue.',
            'disable' => 'Disable',
        ],

        'setup-dialog' => [
            'description' => 'Scan the QR code above using the two-step authentication app of your choice. Then, enter the 6-digit code generated into the field below.',
            'account-password' => 'Account Password',
            'qrcode-loading' => 'Waiting for QR code to load...',
            'enter-6digit-password' => 'You must enter the 6-digit code and your password to continue.',
            'enable' => 'Enable',
            'cancel' => 'Cancel',
        ],
    ],

    'apiKey' => [
        'label' => 'Description',
        'description' => 'A description of this API key.',
        'allowedIPs-label' => 'Allowed IPs',
        'allowedIPs-description' => 'Leave blank to allow any IP address to use this API key, otherwise provide each IP address on a new line.',
        'createButton' => 'Create',

        'your-keys' => 'Your API Key',
        'store-save' => 'The API key you have requested is shown below. Please store this in a safe location, it will not be shown again.',
        'close' => 'Close',

        'delete-api-key' => 'Delete API Key',
        'delete-key' => 'Delete Key',
        'all-requests-invalidated-1' => 'All requests using the',
        'all-requests-invalidated-2' => 'key will be invalidated.',
        'loading' => 'Loading...',
        'no-key-found' => 'No API keys exist for this account.',
        'last-used' => 'Last used',
    ],

    'sshKey' => [
        'loading' => 'Loading...',
        'no-key-found' => 'No SSH Keys exist for this account.',
        'added-on' => 'Added on',

        'createForm' => [
            'key-name' => 'SSH Key Name',
            'public-key' => 'Public Key',
            'public-key-desc' => 'Enter your public SSH key.',
            'save' => 'save',
        ],

        'deleteForm' => [
            'delete-ssh-key' => 'Delete SSH Key',
            'delete-key' => 'Delete Key',
            'will-invalidate-1' => 'Removing the',
            'will-invalidate-2' => 'SSH key will invalidate its usage across the Panel.',
        ],
    ],

    'recoveryTokensDialog' => [
        'title' => 'Two-Step Authentication Enabled',
        'description' => 'Store the codes below somewhere safe. If you lose access to your phone you can use these backup codes to sign in.',
        'alert' => 'These codes will not be shown again.',
        'doneButton' => 'Done',
    ],
];
