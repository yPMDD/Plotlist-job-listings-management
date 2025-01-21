<?php

namespace App\Mail;

use App\Models\job;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class JobApplication extends Mailable
{
    use Queueable, SerializesModels;
    public $user;
    public $job;

    /**
     * Create a new message instance.
     */
    public function __construct(User $user, job $job)
    {
        $this->user=$user;
        $this->job = $job;
    }
    public function build()
    {
        return $this->subject('Job Application: ' . $this->job->title)
                    ->view('emails.email') // Blade view for the email content
                    ->attach(storage_path(
                        'public/storage/files/' . $this->user->cv), [
                        'as' => $this->user->cv]);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Apllying email',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'view.name',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
