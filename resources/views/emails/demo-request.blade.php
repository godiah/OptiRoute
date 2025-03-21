<div style="font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto;">
    <h2 style="color: #2563eb;">New Demo Request</h2>

    <p>A new demo request has been submitted with the following details:</p>

    <table style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
        <tr>
            <td style="padding: 8px; border-bottom: 1px solid #eee; font-weight: bold; width: 30%;">Company:</td>
            <td style="padding: 8px; border-bottom: 1px solid #eee;">{{ $demoRequest->company }}</td>
        </tr>
        <tr>
            <td style="padding: 8px; border-bottom: 1px solid #eee; font-weight: bold;">Name:</td>
            <td style="padding: 8px; border-bottom: 1px solid #eee;">{{ $demoRequest->name }}</td>
        </tr>
        <tr>
            <td style="padding: 8px; border-bottom: 1px solid #eee; font-weight: bold;">Email:</td>
            <td style="padding: 8px; border-bottom: 1px solid #eee;">
                <a href="mailto:{{ $demoRequest->email }}" style="color: #2563eb; text-decoration: none;">
                    {{ $demoRequest->email }}
                </a>
            </td>
        </tr>
        <tr>
            <td style="padding: 8px; border-bottom: 1px solid #eee; font-weight: bold;">Phone:</td>
            <td style="padding: 8px; border-bottom: 1px solid #eee;">{{ $demoRequest->phone }}</td>
        </tr>
        @if ($demoRequest->comments)
            <tr>
                <td style="padding: 8px; border-bottom: 1px solid #eee; font-weight: bold;">Comments:</td>
                <td style="padding: 8px; border-bottom: 1px solid #eee;">{{ $demoRequest->comments }}</td>
            </tr>
        @endif
        <tr>
            <td style="padding: 8px; border-bottom: 1px solid #eee; font-weight: bold;">Submitted:</td>
            <td style="padding: 8px; border-bottom: 1px solid #eee;">
                {{ $demoRequest->created_at->format('F j, Y, g:i a') }}</td>
        </tr>
    </table>

    <p>Please contact the customer to schedule a convenient time for the demo.</p>

    <div style="background-color: #f3f4f6; padding: 15px; border-radius: 5px; margin-top: 20px;">
        <p style="margin: 0; color: #4b5563; font-size: 14px;">
            This is an automated email. Please do not reply to this message.
        </p>
    </div>
</div>
