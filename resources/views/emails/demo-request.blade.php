<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Demo Request</title>
</head>
<body style="margin: 0; padding: 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; background-color: #f8fafc; color: #1e293b;">

    <!-- Email Container -->
    <table role="presentation" style="width: 100%; border-collapse: collapse; background-color: #f8fafc; padding: 40px 20px;">
        <tr>
            <td align="center">

                <!-- Main Email Card -->
                <table role="presentation" style="max-width: 650px; width: 100%; border-collapse: collapse; background-color: #ffffff; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);">

                    <!-- Header -->
                    <tr>
                        <td style="background: linear-gradient(135deg, #2563eb 0%, #10b981 100%); padding: 30px; text-align: center;">
                            <h1 style="margin: 0; color: #ffffff; font-size: 24px; font-weight: 700;">
                                New Demo Request Received
                            </h1>
                            <p style="margin: 8px 0 0 0; color: rgba(255, 255, 255, 0.9); font-size: 14px;">
                                {{ $demoRequest->created_at->format('l, F j, Y \a\t g:i A') }}
                            </p>
                        </td>
                    </tr>

                    <!-- Alert Banner -->
                    <tr>
                        <td style="background-color: #fef3c7; border-left: 4px solid #f59e0b; padding: 16px 30px;">
                            <p style="margin: 0; color: #92400e; font-size: 14px; font-weight: 600;">
                                ⚡ Action Required: Contact the prospect within 24 hours
                            </p>
                        </td>
                    </tr>

                    <!-- Main Content -->
                    <tr>
                        <td style="padding: 30px;">

                            <!-- Company Highlight -->
                            <div style="background: linear-gradient(135deg, rgba(37, 99, 235, 0.08) 0%, rgba(16, 185, 129, 0.08) 100%); border-radius: 10px; padding: 24px; margin-bottom: 24px; border: 2px solid #e0e7ff;">
                                <h2 style="margin: 0 0 8px 0; color: #1e293b; font-size: 22px; font-weight: 700;">
                                    {{ $demoRequest->company }}
                                </h2>
                                <p style="margin: 0; color: #64748b; font-size: 14px; font-weight: 500;">
                                    Potential Client
                                </p>
                            </div>

                            <!-- Contact Information -->
                            <h3 style="margin: 0 0 16px 0; color: #1e293b; font-size: 16px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; border-bottom: 2px solid #e2e8f0; padding-bottom: 8px;">
                                Contact Information
                            </h3>

                            <table role="presentation" style="width: 100%; border-collapse: collapse; margin-bottom: 24px;">
                                <tr>
                                    <td style="padding: 12px 16px; background-color: #f8fafc; border-radius: 6px; width: 35%;">
                                        <strong style="color: #64748b; font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px;">Contact Name</strong>
                                    </td>
                                    <td style="padding: 12px 16px; background-color: #f8fafc; border-radius: 6px;">
                                        <span style="color: #1e293b; font-size: 15px; font-weight: 600;">{{ $demoRequest->name }}</span>
                                    </td>
                                </tr>
                                <tr><td style="height: 8px;"></td></tr>
                                <tr>
                                    <td style="padding: 12px 16px; background-color: #f8fafc; border-radius: 6px;">
                                        <strong style="color: #64748b; font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px;">Email Address</strong>
                                    </td>
                                    <td style="padding: 12px 16px; background-color: #f8fafc; border-radius: 6px;">
                                        <a href="mailto:{{ $demoRequest->email }}" style="color: #2563eb; font-size: 15px; font-weight: 600; text-decoration: none;">
                                            {{ $demoRequest->email }}
                                        </a>
                                    </td>
                                </tr>
                                <tr><td style="height: 8px;"></td></tr>
                                <tr>
                                    <td style="padding: 12px 16px; background-color: #f8fafc; border-radius: 6px;">
                                        <strong style="color: #64748b; font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px;">Phone Number</strong>
                                    </td>
                                    <td style="padding: 12px 16px; background-color: #f8fafc; border-radius: 6px;">
                                        <a href="tel:{{ $demoRequest->phone }}" style="color: #2563eb; font-size: 15px; font-weight: 600; text-decoration: none;">
                                            {{ $demoRequest->phone }}
                                        </a>
                                    </td>
                                </tr>
                            </table>

                            @if ($demoRequest->comments)
                            <!-- Comments Section -->
                            <h3 style="margin: 0 0 12px 0; color: #1e293b; font-size: 16px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; border-bottom: 2px solid #e2e8f0; padding-bottom: 8px;">
                                Additional Comments
                            </h3>
                            <div style="background-color: #f1f5f9; border-left: 4px solid #2563eb; border-radius: 6px; padding: 16px 20px; margin-bottom: 24px;">
                                <p style="margin: 0; color: #334155; font-size: 15px; line-height: 1.6; font-style: italic;">
                                    "{{ $demoRequest->comments }}"
                                </p>
                            </div>
                            @endif

                            <!-- Quick Actions -->
                            <div style="background: linear-gradient(135deg, #1e293b 0%, #334155 100%); border-radius: 10px; padding: 24px; margin: 24px 0;">
                                <h3 style="margin: 0 0 16px 0; color: #ffffff; font-size: 16px; font-weight: 600;">
                                    Quick Actions
                                </h3>
                                <table role="presentation" style="width: 100%; border-collapse: collapse;">
                                    <tr>
                                        <td style="padding: 8px 0;">
                                            <a href="mailto:{{ $demoRequest->email }}?subject=OptiRoute%20Demo%20-%20{{ urlencode($demoRequest->company) }}&body=Hi%20{{ urlencode($demoRequest->name) }}%2C%0A%0AThank%20you%20for%20your%20interest%20in%20OptiRoute.%20I%27d%20love%20to%20schedule%20a%20personalized%20demo%20for%20{{ urlencode($demoRequest->company) }}.%0A%0AWhen%20would%20be%20a%20convenient%20time%20for%20you%3F"
                                               style="display: inline-block; background-color: #2563eb; color: #ffffff; text-decoration: none; padding: 12px 24px; border-radius: 6px; font-size: 14px; font-weight: 600; margin-right: 10px;">
                                                📧 Send Email
                                            </a>
                                            <a href="tel:{{ $demoRequest->phone }}"
                                               style="display: inline-block; background-color: #10b981; color: #ffffff; text-decoration: none; padding: 12px 24px; border-radius: 6px; font-size: 14px; font-weight: 600;">
                                                📞 Call Now
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                            <!-- Reminder Box -->
                            <div style="background-color: #eff6ff; border: 1px solid #bfdbfe; border-radius: 8px; padding: 16px; margin-top: 24px;">
                                <p style="margin: 0; color: #1e40af; font-size: 14px; line-height: 1.6;">
                                    <strong>📋 Next Steps:</strong><br>
                                    1. Contact the prospect within 24 hours<br>
                                    2. Schedule a personalized demo<br>
                                    3. Prepare industry-specific use cases<br>
                                    4. Update CRM with demo appointment
                                </p>
                            </div>

                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="background-color: #f8fafc; padding: 24px; text-align: center; border-top: 1px solid #e2e8f0;">
                            <p style="margin: 0; color: #94a3b8; font-size: 12px; line-height: 1.6;">
                                This is an automated notification from the OptiRoute demo request system.<br>
                                The prospect has been sent an acknowledgment email.
                            </p>
                            <p style="margin: 12px 0 0 0; color: #cbd5e1; font-size: 11px;">
                                © {{ date('Y') }} OptiRoute Admin System
                            </p>
                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>
</html>
