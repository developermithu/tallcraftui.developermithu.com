<?php

namespace App\Livewire\Docs\Components;

use Developermithu\Tallcraftui\Traits\WithTcToast;
use Livewire\Component;

class Toast extends Component
{
    use WithTcToast;

    public function showToast1()
    {
        $this->success(title: 'User created successfully');
        // $this->toast('success', 'User created successfully');
    }

    public function showToast2()
    {
        $this->success(
            title: 'User created successfully', 
            description: 'Your changes have been saved permanently.'
        );
    }
    

    public function showToast3()
    {
        $this->success(
            title: 'User created successfully', 
            description: 'Your changes have been saved permanently.',
            showProgress: true
        );
    }

    public function showToast4()
    {
        $this->success(
            title: 'User created successfully', 
            description: 'Your changes have been saved permanently.',
            showCloseIcon: true
        );
    }

    public function showSuccessToast()
    {
        $this->success(title: 'This is a success message');
    }

    public function showWarningToast()
    {
        $this->warning(title: 'This is a warning message');
    }

    public function showInfoToast()
    {
        $this->info(title: 'This is a info message');
    }

    public function showErrorToast()
    {
        $this->error(title: 'This is a error message');
    }

    // Tost by osition
    public function showTopRightToast()
    {
        $this->success(title: 'User created successfully', position: 'top-right');
    }

    public function showTopLeftToast()
    {
        $this->success(title: 'User created successfully', position: 'top-left');
    }

    public function showBottomRightToast()
    {
        $this->success(title: 'User created successfully', position: 'bottom-right');
    }

    public function showBottomLeftToast()
    {
        $this->success(title: 'User created successfully', position: 'bottom-left');
    }

    public function showProgressToast()
    {
        $this->success(title: 'User created successfully', showProgress: true);
    }

    public function showRedirectToast()
    {
        $this->success(title: 'User created successfully', redirectTo: route('home'));
    }

    public function showDescriptionToast()
    {
        $this->success(title: 'User created successfully', description: 'Your changes have been saved permanently.');
    }


    // public function showToast2()
    // {
    //     $this->success( 
    //         title: 'User created successfully',
    //         // showCloseIcon: false,
    //         description: 'Your changes have been saved permanently',
    //         // timeout: 1000,
    //         // position: 'top-left',
    //         // redirectTo: '/input'
    //     );
    // }
    
    public function render()
    {
        return view('livewire.docs.components.toast');
    }
}
