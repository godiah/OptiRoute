<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Your Interest in OptiRoute</title>
</head>
<body style="margin: 0; padding: 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; background-color: #f8fafc; color: #1e293b;">

    <!-- Email Container -->
    <table role="presentation" style="width: 100%; border-collapse: collapse; background-color: #f8fafc; padding: 40px 20px;">
        <tr>
            <td align="center">

                <!-- Main Email Card -->
                <table role="presentation" style="max-width: 600px; width: 100%; border-collapse: collapse; background-color: #ffffff; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);">

                    <!-- Header with Gradient -->
                    <tr>
                        <td style="background: linear-gradient(135deg, #2563eb 0%, #10b981 100%); padding: 40px 30px; text-align: center;">
                            <h1 style="margin: 0; color: #ffffff; font-size: 28px; font-weight: 700; letter-spacing: -0.5px;">
                                OptiRoute
                            </h1>
                            <p style="margin: 10px 0 0 0; color: rgba(255, 255, 255, 0.95); font-size: 14px; font-weight: 500;">
                                AI-Powered Route Optimization
                            </p>
                        </td>
                    </tr>

                    <!-- Main Content -->
                    <tr>
                        <td style="padding: 40px 30px;">

                            <h2 style="margin: 0 0 20px 0; color: #1e293b; font-size: 24px; font-weight: 600;">
                                Thank You, {{ $demoRequest->name }}!
                            </h2>

                            <p style="margin: 0 0 16px 0; color: #475569; font-size: 16px; line-height: 1.6;">
                                We've received your demo request for <strong>{{ $demoRequest->company }}</strong> and are excited to show you how OptiRoute can transform your logistics operations.
                            </p>

                            <p style="margin: 0 0 24px 0; color: #475569; font-size: 16px; line-height: 1.6;">
                                Our team will review your information and reach out within <strong>24 hours</strong> to schedule a personalized demo at your convenience.
                            </p>

                            <!-- What to Expect Box -->
                            <div style="background: linear-gradient(135deg, rgba(37, 99, 235, 0.05) 0%, rgba(16, 185, 129, 0.05) 100%); border-left: 4px solid #2563eb; border-radius: 8px; padding: 20px; margin: 24px 0;">
                                <h3 style="margin: 0 0 12px 0; color: #1e293b; font-size: 18px; font-weight: 600;">
                                    What to Expect in Your Demo:
                                </h3>
                                <ul style="margin: 0; padding-left: 20px; color: #475569; font-size: 15px; line-height: 1.8;">
                                    <li style="margin-bottom: 8px;">Live demonstration of AI-powered route optimization</li>
                                    <li style="margin-bottom: 8px;">Real-time fleet tracking and smart assignment features</li>
                                    <li style="margin-bottom: 8px;">Cost savings analysis tailored to your operations</li>
                                    <li style="margin-bottom: 0;">Q&A session with our logistics optimization experts</li>
                                </ul>
                            </div>

                            <!-- Stats Section -->
                            <div style="margin: 30px 0;">
                                <p style="margin: 0 0 16px 0; color: #64748b; font-size: 14px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px;">
                                    Why Leading Companies Choose OptiRoute
                                </p>

                                <table role="presentation" style="width: 100%; border-collapse: collapse;">
                                    <tr>
                                        <td style="width: 50%; padding: 12px; text-align: center; border-right: 1px solid #e2e8f0;">
                                            <div style="color: #2563eb; font-size: 28px; font-weight: 700; margin-bottom: 4px;">30%+</div>
                                            <div style="color: #64748b; font-size: 13px; font-weight: 500;">Cost Reduction</div>
                                        </td>
                                        <td style="width: 50%; padding: 12px; text-align: center;">
                                            <div style="color: #10b981; font-size: 28px; font-weight: 700; margin-bottom: 4px;">37%</div>
                                            <div style="color: #64748b; font-size: 13px; font-weight: 500;">Carbon Reduction</div>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                            <!-- CTA Button -->
                            <table role="presentation" style="width: 100%; border-collapse: collapse; margin: 30px 0;">
                                <tr>
                                    <td style="text-align: center; padding: 20px 0;">
                                        <p style="margin: 0 0 12px 0; color: #64748b; font-size: 14px;">
                                            In the meantime, learn more about our platform:
                                        </p>
                                        <a href="{{ env('APP_URL') }}" style="display: inline-block; background: linear-gradient(135deg, #2563eb 0%, #10b981 100%); color: #ffffff; text-decoration: none; padding: 14px 32px; border-radius: 8px; font-size: 15px; font-weight: 600; letter-spacing: 0.3px;">
                                            Visit Our Website
                                        </a>
                                    </td>
                                </tr>
                            </table>

                            <!-- Divider -->
                            <div style="border-top: 1px solid #e2e8f0; margin: 30px 0;"></div>

                            <!-- Contact Details Summary -->
                            <div style="background-color: #f8fafc; border-radius: 8px; padding: 20px;">
                                <p style="margin: 0 0 12px 0; color: #64748b; font-size: 13px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px;">
                                    Your Request Details:
                                </p>
                                <table role="presentation" style="width: 100%; border-collapse: collapse;">
                                    <tr>
                                        <td style="padding: 6px 0; color: #64748b; font-size: 14px; width: 30%;">Company:</td>
                                        <td style="padding: 6px 0; color: #1e293b; font-size: 14px; font-weight: 500;">{{ $demoRequest->company }}</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 6px 0; color: #64748b; font-size: 14px;">Contact:</td>
                                        <td style="padding: 6px 0; color: #1e293b; font-size: 14px; font-weight: 500;">{{ $demoRequest->name }}</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 6px 0; color: #64748b; font-size: 14px;">Email:</td>
                                        <td style="padding: 6px 0; color: #1e293b; font-size: 14px; font-weight: 500;">{{ $demoRequest->email }}</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 6px 0; color: #64748b; font-size: 14px;">Phone:</td>
                                        <td style="padding: 6px 0; color: #1e293b; font-size: 14px; font-weight: 500;">{{ $demoRequest->phone }}</td>
                                    </tr>
                                    @if($demoRequest->comments)
                                    <tr>
                                        <td style="padding: 6px 0; color: #64748b; font-size: 14px; vertical-align: top;">Message:</td>
                                        <td style="padding: 6px 0; color: #1e293b; font-size: 14px; font-weight: 500;">{{ $demoRequest->comments }}</td>
                                    </tr>
                                    @endif
                                </table>
                            </div>

                            <p style="margin: 24px 0 0 0; color: #475569; font-size: 15px; line-height: 1.6;">
                                If you have any immediate questions, feel free to reply to this email or call us at <strong style="color: #2563eb;">+1 (555) 123-4567</strong>.
                            </p>

                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="background-color: #f8fafc; padding: 30px; text-align: center; border-top: 1px solid #e2e8f0;">
                            <p style="margin: 0 0 12px 0; color: #1e293b; font-size: 16px; font-weight: 600;">
                                OptiRoute
                            </p>
                            <p style="margin: 0 0 8px 0; color: #64748b; font-size: 14px; line-height: 1.5;">
                                Transforming logistics operations with AI-powered optimization
                            </p>
                            <p style="margin: 0; color: #94a3b8; font-size: 13px; line-height: 1.5;">
                                Reducing costs by 30% • Cutting carbon emissions by 37%
                            </p>

                            <!-- Social Links (Optional) -->
                            <div style="margin-top: 20px;">
                                <p style="margin: 0; color: #94a3b8; font-size: 12px;">
                                    © {{ date('Y') }} OptiRoute. All rights reserved.
                                </p>
                            </div>
                        </td>
                    </tr>

                </table>

                <!-- Email Footer Note -->
                <table role="presentation" style="max-width: 600px; width: 100%; border-collapse: collapse; margin-top: 20px;">
                    <tr>
                        <td style="text-align: center; padding: 0 20px;">
                            <p style="margin: 0; color: #94a3b8; font-size: 12px; line-height: 1.6;">
                                This is an automated acknowledgment of your demo request. Our team will contact you shortly.
                            </p>
                        </td>
                    </tr>
                </table>

            </td>
        </tr>
    </table>

</body>
</html>
