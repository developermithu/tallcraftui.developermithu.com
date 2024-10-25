<div>
    @slot('metaTags')
        <x-meta-tags title="Toast components - Tallcraftui" />
    @endslot

    <x-heading title="Toast" subtitle="Dialog Components" />

    <x-code-block title="Configuration" no-render>
        @verbatim('docs')
            {{-- Add the Toast component on your main layout. --}}
            <body>
                <x-toast />  
            </body>
        @endverbatim
    </x-code-block>

    <p>Import <code>WithTcToast</code> trait and call the <code>$this->toast(...)</code> method</p>

    <x-code language="php">
        @verbatim
use Developermithu\Tallcraftui\Traits\WithTcToast;

class Toast extends Component
{
    use WithTcToast;
    
    public function save()
    {
        $this->success(...);
        $this->error(...);
        $this->warning(...);
        $this->info(...);
    }
}
        @endverbatim
    </x-code>
        
    <x-code-block title="Basic Usage" inline hide-button>
        <x-button wire:click="showToast1" label="Toast 1" />
        <x-button wire:click="showToast2" label="Toast 2" />
        <x-button wire:click="showToast3" label="Toast 3" />
        <x-button wire:click="showToast4" label="Toast 4" />
    </x-code-block>

    <x-code language="php" space-none>
        @verbatim
// Toast 1
$this->success('User created successfully'); // OR
// $this->toast('success', 'User created successfully'); 

// Toast 2
$this->success(
    title: 'User created successfully', 
    description: 'Your changes have been saved permanently.'
);

// Toast 3
$this->success(
    title: 'User created successfully', 
    description: 'Your changes have been saved permanently.',
    showProgress: true
);

// Toast 4
$this->success(
    title: 'User created successfully', 
    description: 'Your changes have been saved permanently.',
    showCloseIcon: true
);
        @endverbatim
    </x-code>

    <x-code-block title="Toast type" inline hide-button>
        <x-button wire:click="showSuccessToast" label="Success" green />
        <x-button wire:click="showWarningToast" label="Warning" yellow />
        <x-button wire:click="showInfoToast" label="Info" blue />
        <x-button wire:click="showErrorToast" label="Error" red />
    </x-code-block>

    <x-code language="php" space-none>
        @verbatim
            $this->success('This is a success message');
            $this->warning('This is a warning message');
            $this->info('This is a info message');
            $this->error('This is a error message');
        @endverbatim
    </x-code>

    <x-code-block title="Toast position" inline hide-button>
        @verbatim('docs')
            <x-button wire:click="showTopRightToast" label="Top right" />
            <x-button wire:click="showTopLeftToast" label="Top left" />
            <x-button wire:click="showBottomRightToast" label="Bottom right" />
            <x-button wire:click="showBottomLeftToast" label="Bottom left" />
        @endverbatim
    </x-code-block>
    
    <x-code language="php" space-none>
        @verbatim
            $this->success(title: 'User created successfully', position: 'top-right');
            $this->success(title: 'User created successfully', position: 'top-left');
            $this->success(title: 'User created successfully', position: 'bottom-right');
            $this->success(title: 'User created successfully', position: 'bottom-left');
        @endverbatim
    </x-code>

    <x-code-block title="With progress bar" inline hide-button>
        @verbatim('docs')
            <x-button wire:click="showProgressToast" label="Progress" />
        @endverbatim
    </x-code-block>

    <x-code language="php" space-none>
        @verbatim
            $this->success(title: 'User created successfully', showProgress: true);
        @endverbatim
    </x-code>

    <x-code-block title="With redirecting" inline hide-button>
        @verbatim('docs')
            <x-button wire:click="showRedirectToast" label="Redirect" />
        @endverbatim
    </x-code-block>

    <x-code language="php" space-none>
        @verbatim
            $this->success(
                    title: 'User created successfully', 
                    redirectTo: route('docs.installation')
                );
        @endverbatim
    </x-code>

    <x-code-block title="Duration" inline hide-button>
        @slot('description')
            By default, toasts disappear after <strong>3 seconds</strong>. To adjust this, specify a custom duration in <strong>milliseconds</strong> using the <code>timeout</code> prop.
        @endslot
        
        @verbatim('docs')
            <x-button wire:click="showDurationToast" label="Duration" />
        @endverbatim
    </x-code-block>

    <x-code language="php" space-none>
        @verbatim
            $this->success(title: 'User created successfully', timeout: 5000); 
        @endverbatim
    </x-code>

    <x-code-block title="Persist" inline hide-button>
        @slot('description')
            To keep the toast open indefinitely, set the <code>timeout</code> prop to <code>0</code>.
        @endslot
        
        @verbatim('docs')
            <x-button wire:click="showPersistToast" label="Persist" />
        @endverbatim
    </x-code-block>

    <x-code language="php" space-none>
        @verbatim
            $this->success(title: 'User created successfully', timeout: 0);  
        @endverbatim
    </x-code>

    <x-code-block title="With description" inline hide-button>
        @verbatim('docs')
            <x-button wire:click="showDescriptionToast" label="Description" />
        @endverbatim
    </x-code-block>

    <x-code language="php" space-none>
        @verbatim
            $this->success(
                    title: 'User created successfully', 
                    description: 'Your changes have been saved permanently.'
                );
        @endverbatim
    </x-code>

    <x-code-block language="php" title="All available props" no-render space-1>
        @verbatim('docs')
        $this->success( 
                    title: 'User created successfully',
                    description: 'Your changes have been saved permanently',
                    position: 'top-right',
                    icon: 'check-circle',
                    showCloseIcon: false,
                    showProgress: false,
                    timeout: 3000,
                    redirectTo: '/'
                );
        @endverbatim
    </x-code-block>

    <h2 class="pt-5 pb-2" id="default-settings">Default settings</h2>

    <p>Change toast default settings according your needs <code>config/tallcraftui.php</code> </p>

    <x-code language="php">
        @verbatim
                return [                
                    'toast' => [
                        'position' => ToastPosition::BOTTOM_RIGHT->value,
                        'showCloseIcon' => false,
                        'showProgress' => false,
                        'timeout' => 3000
                    ],
                ];
        @endverbatim
    </x-code>

    @slot('aside')
    <x-on-this-page>
        <x-on-this-page.item title="Basic usage" />
        <x-on-this-page.item title="Toast type" />
        <x-on-this-page.item title="Toast position" />
        <x-on-this-page.item title="With progress bar" />
        <x-on-this-page.item title="With redirecting" />
        <x-on-this-page.item title="Duration" />
        <x-on-this-page.item title="Persist" />
        <x-on-this-page.item title="With description" />
        <x-on-this-page.item title="All available props" />
        <x-on-this-page.item title="Default settings" />
    </x-on-this-page>
@endslot
</div>
