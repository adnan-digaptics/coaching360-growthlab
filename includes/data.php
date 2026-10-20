<?php
/**
 * Coaching 360 Growth Lab USA
 * Core Platform Data: Services, Coaching Industries, Case Studies, Locations & Solutions
 */

require_once __DIR__ . '/security.php';

// 1. SERVICES DATA (12 Dedicated Specialized Services for Coaches)
$services = [
    [
        'slug' => 'lead-generation',
        'short_title' => 'Lead Generation',
        'title' => 'Predictable Lead Generation Systems for US Coaches',
        'tagline' => 'Fill your discovery calendar with pre-qualified, high-intent coaching clients every single week.',
        'icon' => 'bi-graph-up-arrow',
        'badge' => 'High-Conversion Acquisition',
        'image' => 'assets/images/service-lead-gen.jpg',
        'cta_text' => 'Get More Coaching Clients',
        'stats' => ['350k+' => 'Coaching Leads Generated', '4.2x' => 'Average Client ROI', '14 Days' => 'Launch-To-Pipeline Time', '88%' => 'Lead Show-Up Rate'],
        'summary' => 'Stop relying on unpredictable word-of-mouth. We build multi-channel lead acquisition engines specifically calibrated for coaches, combining targeted paid traffic, high-converting lead magnets, and automated qualification questionnaires.',
        'problems_solved' => [
            'Unpredictable "feast-or-famine" client booking cycles',
            'Spending hours on cold DMs and networking with zero qualified appointments',
            'Attracting price-sensitive tire-kickers who cannot afford high-ticket coaching',
            'No automated mechanism to capture and nurture website visitors into booked discovery calls',
            'Ad campaigns that waste budget on unqualified clicks without generating phone numbers'
        ],
        'key_features' => [
            'Precision Ideal Client Profile (ICP) & Buying Intent Mapping',
            'High-Converting Value In Advance Lead Magnets & VSLs',
            'Multi-Step Application & Discovery Call Qualification Funnels',
            'Multi-Channel Inbound Traffic (Google Search, Meta, LinkedIn)',
            'Automated 2-Way SMS & Email Speed-to-Lead Follow-ups',
            'Continuous Conversion Rate Optimization & Deal Attribution'
        ],
        'deliverables' => [
            'Turnkey Lead Capture Funnel with Application Workflow',
            'Direct-Response Ad Creative & Copywriting Suite',
            'Automated Calendar Booking Machine with SMS Reminders',
            'Live Executive Lead Attribution & ROI Dashboard'
        ],
        'faqs' => [
            ['q' => 'How quickly will I start getting booked discovery calls?', 'a' => 'Our custom client acquisition funnels typically launch within 10 to 14 business days. Most coaching clients begin seeing qualified discovery appointments on their calendar within 48 to 72 hours of ad and funnel activation.'],
            ['q' => 'How do you ensure leads are qualified for high-ticket coaching?', 'a' => 'We implement mandatory multi-step application filters before anyone can book. We qualify by income/revenue, urgency of pain, commitment level, and willingness to invest.'],
            ['q' => 'Does this work for both B2B and B2C coaches?', 'a' => 'Yes. For executive, corporate, and sales coaches, we deploy high-authority LinkedIn and Google Search engines. For life, health, and relationship coaches, we leverage high-converting Meta and Instagram video funnels.'],
            ['q' => 'Do you provide the ad creative and copywriting?', 'a' => 'Yes, our team writes all direct-response ad copy, crafts high-converting video scripts, and builds your custom landing page assets.'],
            ['q' => 'Can this integrate with my existing calendar and CRM?', 'a' => 'Yes, we integrate seamlessly with GoHighLevel, Calendly, Acuity, Zoom, Google Calendar, and Stripe.']
        ]
    ],
    [
        'slug' => 'seo-for-coaches',
        'short_title' => 'SEO for Coaches',
        'title' => 'Search Engine Optimization (SEO) Built Exclusively for Coaches',
        'tagline' => 'Rank #1 on Google when high-value clients search for coaching in your niche and city.',
        'icon' => 'bi-search',
        'badge' => 'Organic Search Authority',
        'image' => 'assets/images/service-sales-funnels.jpg',
        'cta_text' => 'Rank My Coaching Website',
        'stats' => ['#1' => 'Google Search Rankings', '+310%' => 'Organic Traffic Growth', 'Zero' => 'Ad Spend Required', '24/7' => 'Organic Lead Inflow'],
        'summary' => 'When prospects recognize a crisis in their career, health, relationships, or business, they search Google first. We optimize your website, content architecture, and authority backlink profile so your coaching business dominates organic search.',
        'problems_solved' => [
            'Your coaching website is invisible on page 3 or 4 of Google search results',
            'Competitors with lower credentials outranking you for top coaching keywords',
            'High dependency on paid ads with zero recurring organic client inflow',
            'Thin, unoptimized blog posts that bring in zero qualified discovery inquiries',
            'Technical website issues, slow load times, and poor mobile search rankings'
        ],
        'key_features' => [
            'Coaching Intent Keyword Research (High-Ticket Transactional Terms)',
            'Comprehensive On-Page SEO & Topic Authority Silo Architecture',
            'Technical SEO, Core Web Vitals & Mobile-First Optimization',
            'High-Authority Niche Backlink Acquisition & Digital PR',
            'Conversion-Engineered Pillar Content & Coach Thought Leadership Guides',
            'Google Search Console & Organic Lead Attribution Tracking'
        ],
        'deliverables' => [
            'Full Technical & Competitive SEO Diagnostic Audit',
            'Keyword Target Matrix & URL Architecture Map',
            'Monthly High-Authority Coaching Content Releases',
            'Continuous Keyword Tracking & Monthly Executive Performance Reports'
        ],
        'faqs' => [
            ['q' => 'How long does SEO take to produce coaching clients?', 'a' => 'Most coaching websites begin seeing upward rank movements within 45 to 60 days, with meaningful organic discovery calls flowing consistently by months 3 to 4.'],
            ['q' => 'Do you target national or local search terms?', 'a' => 'Both. If you coach clients nationwide via Zoom, we target high-intent national keywords (e.g. "executive coach for tech founders"). If you work locally, we optimize for city-specific searches.'],
            ['q' => 'Do you write the SEO content or do I have to?', 'a' => 'Our specialized content team writes deep, authoritative, SEO-optimized articles and landing pages tailored specifically to your coaching voice.'],
            ['q' => 'How do you track conversions from SEO?', 'a' => 'We configure Google Analytics 4 and call/form conversion tracking so you see exactly which organic keyword searches resulted in booked client calls.'],
            ['q' => 'Is SEO better than paid ads for coaches?', 'a' => 'They work best together! Paid ads deliver immediate leads, while SEO builds an enduring asset that lowers your customer acquisition costs to near-zero over time.']
        ]
    ],
    [
        'slug' => 'website-development',
        'short_title' => 'Website Development',
        'title' => 'High-Converting Web Development for Coaching Practices',
        'tagline' => 'Transform your coaching website from a generic digital brochure into a 24/7 client booking machine.',
        'icon' => 'bi-laptop',
        'badge' => 'Conversion Engineered',
        'image' => 'assets/images/service-sales-funnels.jpg',
        'cta_text' => 'Build My Coaching Website',
        'stats' => ['3.4x' => 'Higher Conversion Rate', '< 1.2s' => 'Page Load Speed', '100%' => 'Mobile Responsive', 'Zero' => 'Cookie-Cutter Templates'],
        'summary' => 'Most coaching websites fail because they focus on generic platitudes rather than direct-response psychology. We build sleek, lightning-fast, mobile-first websites designed to build instant credibility and compel visitors to book a consultation.',
        'problems_solved' => [
            'Embarrassing, outdated website that does not reflect your true coaching expertise',
            'High visitor bounce rates because visitors can’t quickly understand how you help them',
            'Confusing navigation menus with too many choices causing decision paralysis',
            'Slow mobile page loading speeds that frustrate smartphone visitors',
            'No clear calls-to-action or embedded interactive calendar booking workflows'
        ],
        'key_features' => [
            'Bespoke Premium UI/UX Design Tailored to Your Coaching Brand',
            'Direct-Response Copywriting Written by Senior Conversion Strategists',
            'Frictionless Mobile-First Experience & Touch-Optimized Layouts',
            'Integrated One-Click Discovery Call Booking & Intake Questionnaires',
            'Interactive Client Testimonial Showcases & Video Proof Modules',
            'Ultra-Fast Technical Performance & Enterprise Cloud Hosting Ready'
        ],
        'deliverables' => [
            'Custom Designed Multi-Page Coaching Website',
            'Complete Direct-Response Page Copywriting Suite',
            'Calendar & Form Integration with Automatic CRM Sync',
            'Speed Optimization, SSL Security & 30-Day Post-Launch Support'
        ],
        'faqs' => [
            ['q' => 'How long does it take to build my coaching website?', 'a' => 'A custom coaching website typically takes 2 to 3 weeks from initial strategy kick-off to live launch.'],
            ['q' => 'Do you provide the copywriting or must I provide it?', 'a' => 'Our service includes complete, high-converting copywriting. We conduct an in-depth interview with you to capture your methodology, client wins, and authentic voice.'],
            ['q' => 'Will I be able to easily make updates to my site?', 'a' => 'Yes! We provide full admin access along with customized video walkthrough tutorials showing you how to update copy, photos, and calendar links.'],
            ['q' => 'Can you integrate payment processing for paid coaching packages?', 'a' => 'Yes. We seamlessly connect Stripe, PayPal, and GoHighLevel checkouts with 1-click upsells and automated onboarding receipts.'],
            ['q' => 'Is the site optimized for smartphones?', 'a' => '100%. Over 65% of coaching prospects browse on mobile, so every page, form, and button is tested across iOS and Android devices.']
        ]
    ],
    [
        'slug' => 'crm-automation',
        'short_title' => 'CRM & Automation',
        'tagline' => 'Streamline your client pipeline, automate follow-ups, and eliminate repetitive admin busywork.',
        'title' => 'Coaching CRM Architecture & Marketing Automation',
        'icon' => 'bi-cpu-fill',
        'badge' => 'Operational Leverage',
        'image' => 'assets/images/service-marketing-automation.jpg',
        'cta_text' => 'Automate My Coaching CRM',
        'stats' => ['18+ hrs' => 'Saved Weekly Per Coach', '99.9%' => 'Automation Reliability', '65%' => 'Higher Show-Up Rates', '360°' => 'Pipeline Visibility'],
        'summary' => 'Coaching businesses waste dozens of hours every week manually chasing leads, sending reminder emails, rescheduling discovery calls, and tracking clients on spreadsheets. We install institutional CRM systems and automations that handle the entire client lifecycle.',
        'problems_solved' => [
            'Leads going cold because you took hours or days to manually reply',
            'High appointment no-show rates resulting from weak reminder sequences',
            'Scattered client records across sticky notes, spreadsheets, and inbox threads',
            'Manual onboarding chaos: sending contracts, invoices, and intake forms by hand',
            'Zero visibility into which leads are close to signing high-ticket coaching packages'
        ],
        'key_features' => [
            'Unified Visual Coaching Deal Pipeline & Opportunity Staging',
            'Instant Speed-to-Lead Automation (Sub-60s SMS & Email Greeting)',
            'Multi-Channel Discovery Call Reminder Workflows (SMS + Email + ICS)',
            'Automated Client Agreement, Invoice & Onboarding Sequences',
            'Automated Past-Lead Reactivation & Quarterly Re-Engagement Triggers',
            'Centralized Two-Way Communication Hub for SMS, Email, and Social DMs'
        ],
        'deliverables' => [
            'Complete CRM Configuration Tailored to Your Coaching Workflow',
            'Multi-Touch Automated Follow-Up Sequences Written & Deployed',
            'Calendar Sync & Automated No-Show Rescheduling Workflows',
            'Video Training Playbooks for Coach and Virtual Assistant Staff'
        ],
        'faqs' => [
            ['q' => 'Which CRM do you recommend for coaches?', 'a' => 'We primarily specialize in GoHighLevel because it combines CRM, email, SMS, calendars, funnels, and contract signing into one platform. We also support HubSpot and ActiveCampaign.'],
            ['q' => 'How does automated SMS reduce appointment no-shows?', 'a' => 'Our reminder workflows send personalized, conversational SMS messages (e.g. 24h before asking for a "YES" reply, and 1h before with Zoom link), raising show-up rates past 85%.'],
            ['q' => 'Can this automate my client onboarding after they sign?', 'a' => 'Yes! The moment an invoice is paid, our automation sends the client agreement, intake questionnaire, Google Drive folder, and calendar link for their first session.'],
            ['q' => 'Will the automated messages sound robotic?', 'a' => 'Never. We write all messages with warm, natural, one-on-one conversational tone and dynamic custom fields so clients feel personally taken care of.'],
            ['q' => 'Can you migrate my existing contacts from spreadsheets?', 'a' => 'Yes, we clean, tag, and import all your historical contacts into the new system without losing notes or history.']
        ]
    ],
    [
        'slug' => 'ai-automation',
        'short_title' => 'AI Automation',
        'title' => 'Intelligent AI Automation Systems for Modern Coaching Practices',
        'tagline' => 'Deploy cutting-edge AI agents for 24/7 lead qualification, instant booking, and client support.',
        'icon' => 'bi-robot',
        'badge' => 'Next-Gen Intelligence',
        'image' => 'assets/images/service-ghl.jpg',
        'cta_text' => 'Deploy AI Growth Automation',
        'stats' => ['24/7' => 'Instant Lead Response', '10 Sec' => 'Average AI Response Time', '3.5x' => 'More Inquiries Captured', '100%' => 'Custom Knowledge Base'],
        'summary' => 'Leverage proprietary Artificial Intelligence trained on your specific coaching framework. Our custom AI conversational agents engage website visitors, answer common coaching questions, qualify prospects according to your budget criteria, and book appointments directly on your calendar while you sleep.',
        'problems_solved' => [
            'Website visitors leaving your site after hours without ever reaching out',
            'Spending hours answering basic questions from people who aren’t ready to invest',
            'Delayed lead responses allowing prospects to reach out to competing coaches',
            'Inability to provide 24/7 customer engagement without hiring expensive staff',
            'Manual transcript summarizing and session action-item extraction'
        ],
        'key_features' => [
            'Custom AI Chat & Voice Agents Trained on Your Coaching Methodology',
            'Multi-Platform AI Assistant (Website Widget, SMS, WhatsApp & Instagram DMs)',
            'Automated Prospect Pre-Qualification & Budget Screening AI',
            'Direct In-Conversation Calendar Booking via Cal.com / GoHighLevel',
            'Post-Session AI Transcription & Action-Item Summary Generator',
            'Human-in-the-Loop Safeguards & VIP Escalation Protocols'
        ],
        'deliverables' => [
            'Trained Custom AI Agent with Your Coaching Knowledge Base',
            'Multi-Channel Integration (Web, SMS, Instagram)',
            'Prompt Engineering & Guardrail Safety Testing',
            'Performance Analytics & Continuous Conversation Tuning'
        ],
        'faqs' => [
            ['q' => 'Will the AI sound robotic or hallucinate answers?', 'a' => 'No. We implement strict guardrails and train the AI exclusively on your verified coaching framework, FAQs, and pricing guidelines. If asked something outside its scope, it gracefully offers to connect the prospect directly with you.'],
            ['q' => 'Can the AI book discovery calls directly into my calendar?', 'a' => 'Yes. The AI checks your real-time availability and books discovery calls natively within the chat conversation.'],
            ['q' => 'Where can the AI agent be deployed?', 'a' => 'On your website, via SMS, WhatsApp, Instagram DMs, and Facebook Messenger.'],
            ['q' => 'Does this replace human connection?', 'a' => 'Not at all. The AI handles the initial qualification and scheduling friction so you can focus 100% of your energy on high-impact coaching conversations.'],
            ['q' => 'How much technical knowledge do I need to run this?', 'a' => 'Zero. Our team handles complete architecture, prompt tuning, and system maintenance.']
        ]
    ],
    [
        'slug' => 'gohighlevel',
        'short_title' => 'GoHighLevel Implementation',
        'title' => 'Turnkey GoHighLevel (GHL) Architecture for Coaching Businesses',
        'tagline' => 'Certified GoHighLevel setup, custom snapshots, sales pipelines, and follow-up machines built for coaches.',
        'icon' => 'bi-gear-wide-connected',
        'badge' => 'Certified GHL Partner',
        'image' => 'assets/images/service-ghl.jpg',
        'cta_text' => 'Get GHL Implementation',
        'stats' => ['150+' => 'GHL Sub-Accounts Architected', '7+ Tools' => 'Consolidated Into One', '85%' => 'Manual Task Reduction', 'A2P 10DLC' => '100% Compliance Approval'],
        'summary' => 'GoHighLevel is the undisputed gold standard platform for coaching businesses, but configuring it properly requires deep expertise. We deliver complete white-glove GHL setup: custom coaching pipelines, multi-channel automated workflows, booking calendars, funnel pages, membership portals, and A2P compliance.',
        'problems_solved' => [
            'Overpaying hundreds of dollars monthly for 6+ separate disconnected tools',
            'Broken GHL workflows, missed webhooks, and trigger logic errors',
            'A2P 10DLC SMS registration rejections preventing you from texting leads',
            'Generic templates that don’t reflect how a professional coaching practice operates',
            'Lack of staff training and confusion over how to manage opportunities'
        ],
        'key_features' => [
            'Complete GHL Sub-Account Provisioning & Custom Domain Mapping',
            'Proven "Coaching Growth" Pipeline & Opportunity Deal Stage Blueprint',
            'A2P 10DLC Brand/Campaign Approval & Dedicated Phone Number Setup',
            'Two-Way SMS, Email, Call Recording & Missed-Call-Text-Back Engine',
            'Integrated Booking Calendars with Custom Intake Questionnaires',
            'Coaching Client Membership Area & Course Delivery Vault Configuration'
        ],
        'deliverables' => [
            'Turnkey GoHighLevel Snapshot Customized to Your Coaching Brand',
            'Full Email / SMS Deliverability Setup (SPF, DKIM, DMARC, Brand Registration)',
            'Pre-Built Funnel & Application Page Templates',
            'Custom Loom Video Walkthrough SOPs & Team Training Session'
        ],
        'faqs' => [
            ['q' => 'Can you migrate my data from my current CRM into GHL?', 'a' => 'Yes. We provide complete white-glove migration from HubSpot, ActiveCampaign, Kajabi, Keap, ClickFunnels, and Mailchimp.'],
            ['q' => 'Do you help get A2P 10DLC SMS registration approved?', 'a' => 'Yes! We handle the entire compliance paperwork and submission process to guarantee your SMS campaigns are fully verified by US carriers.'],
            ['q' => 'Can GHL replace my course and community platform?', 'a' => 'Yes. GHL has built-in course hosting, community portals, and client resource vaults, allowing you to cancel subscriptions to Teachable or Kajabi.'],
            ['q' => 'Will I receive training on how to use my new GHL setup?', 'a' => 'Every implementation includes step-by-step video tutorials and a live 1-on-1 walkthrough session so you feel 100% confident.'],
            ['q' => 'Do you offer ongoing monthly GHL maintenance?', 'a' => 'Yes, we provide ongoing retainer plans where our engineers build new workflows, tweak funnels, and troubleshoot systems on demand.']
        ]
    ],
    [
        'slug' => 'n8n-automation',
        'short_title' => 'n8n Workflow Automation',
        'title' => 'Advanced n8n Workflow Automation & Custom Integrations',
        'tagline' => 'Break free from expensive Zapier limits with flexible, enterprise-grade open-source automations.',
        'icon' => 'bi-diagram-3-fill',
        'badge' => 'Advanced Integration',
        'image' => 'assets/images/service-marketing-automation.jpg',
        'cta_text' => 'Build Custom n8n Workflows',
        'stats' => ['Zero' => 'Zapier Task Limit Overage', '100+' => 'Apps Interconnected', '10x' => 'Cost Savings on Automations', 'Enterprise' => 'Data Privacy Control'],
        'summary' => 'For coaching businesses with complex operations, multi-step onboarding, and high volume, traditional tools like Zapier become painfully expensive and restrictive. We design and host advanced n8n automation workflows that connect your CRM, Stripe, Zoom, Google Workspace, Slack, and AI models with zero operational friction.',
        'problems_solved' => [
            'Paying thousands of dollars annually in expensive Zapier or Make task fees',
            'Complex multi-app workflows breaking whenever an API updates',
            'Inability to run custom code logic or database queries between marketing tools',
            'Data privacy and security concerns with third-party automation vendors',
            'Manual manual copying of client records, invoices, and session transcripts'
        ],
        'key_features' => [
            'Custom n8n Workflow Architecture & Self-Hosted Cloud Deployment',
            'Complex Multi-Branch Conditional Routing & Error-Handling Webhooks',
            'Automated Zoom Session Recording Fetch & AI Transcription Ingestion',
            'Bi-Directional Database Sync (PostgreSQL, Airtable, Notion & GHL)',
            'Automated Accounting & Contract Reconciliation with Stripe & QuickBooks',
            'Instant Team Alerts to Slack / Telegram for High-Value Discovery Calls'
        ],
        'deliverables' => [
            'Fully Deployed and Monitored n8n Automation Engine',
            'Custom Webhook & API Architecture Documentation',
            'Automated Error Notification & Fallback Systems',
            'Ongoing Maintenance & Version Upgrade Support'
        ],
        'faqs' => [
            ['q' => 'What is n8n and why is it better than Zapier for coaches?', 'a' => 'n8n is an enterprise-grade workflow automation tool that can run unlimited tasks without expensive per-zap overage fees, allowing complex multi-step logic and superior data privacy.'],
            ['q' => 'Do I need to host n8n myself?', 'a' => 'We handle the complete hosting, server management, security patching, and monitoring so you enjoy the benefits without any technical headaches.'],
            ['q' => 'Can n8n connect with GoHighLevel and Zoom?', 'a' => 'Yes! We frequently build workflows that automatically pull Zoom recordings, generate AI action items, and update client records in GoHighLevel instantly.'],
            ['q' => 'Can you migrate my existing Zaps to n8n?', 'a' => 'Yes. We audit your Zapier account and rebuild all workflows in n8n, often saving clients $200 to $800 every single month.'],
            ['q' => 'How secure is n8n for confidential coaching data?', 'a' => 'Extremely secure. Your data resides in your dedicated cloud instance with end-to-end encryption.']
        ]
    ],
    [
        'slug' => 'social-media-marketing',
        'short_title' => 'Social Media Marketing',
        'title' => 'Authority Social Media Marketing for Coaching Thought Leaders',
        'tagline' => 'Turn your social channels into client-attracting authority platforms on LinkedIn, Instagram & YouTube.',
        'icon' => 'bi-share-fill',
        'badge' => 'Organic Client Attraction',
        'image' => 'assets/images/service-business-growth.jpg',
        'cta_text' => 'Scale My Social Presence',
        'stats' => ['10x' => 'Organic Profile Reach', '50k+' => 'Targeted Video Impressions', 'B2B + B2C' => 'Channel Optimization', 'DMs -> Calls' => 'Direct Pipeline Funnel'],
        'summary' => 'Coaching clients don’t buy from anonymous logos; they buy from mentors they trust. We help you build an unmistakable authority presence on LinkedIn, Instagram, and YouTube through thought-leadership positioning, short-form video repurposing, and inbound DM conversation funnels.',
        'problems_solved' => [
            'Posting consistently with zero client inquiries or discovery calls booked',
            'Feeling invisible in a saturated marketplace full of generic advice',
            'Spending hours editing videos and writing posts with no strategy',
            'Lack of an inbound DM script framework to transition commenters into discovery calls',
            'Unprofessional graphics and mismatched branding across your profiles'
        ],
        'key_features' => [
            'Executive Profile Optimization (LinkedIn, Instagram & YouTube)',
            'Content Pillars Focused on Client Transformation & High-Ticket Offers',
            'Short-Form Video Repurposing (Reels, TikToks, Shorts & Carousels)',
            'Direct-Response Story & Carousel Copywriting',
            'Inbound Social Selling DM Playbooks & Appointment Setter Workflows',
            'Social Listening & High-Intent Audience Growth Tactics'
        ],
        'deliverables' => [
            'Complete Profile Revamp & Banner Graphic Design Suite',
            'Monthly 30-Day Thought-Leadership Content Calendar & Scripts',
            'Professional Video Editing & Carousel Graphic Production',
            'DM Conversation-to-Call Script Playbook'
        ],
        'faqs' => [
            ['q' => 'Which social platform is best for my coaching business?', 'a' => 'For executive, leadership, and B2B business coaches, LinkedIn is unbeatable. For life, mindset, wellness, and relationship coaches, Instagram and YouTube deliver the highest client engagement.'],
            ['q' => 'Do I have to dance on camera or make silly trends?', 'a' => 'Never. Our strategy is built entirely on mature, high-authority educational and transformative content that commands high-ticket fees.'],
            ['q' => 'Do you write the posts or do I have to?', 'a' => 'We create the content framework, ghostwrite your articles, edit your video clips, and write your captions.'],
            ['q' => 'How do social media followers turn into paying clients?', 'a' => 'We implement an Inbound Conversation Funnel where engagement triggers value resources in DMs, moving warm prospects seamlessly onto your discovery calendar.'],
            ['q' => 'Can you work with video footage I record on my phone?', 'a' => 'Yes! You record 1 to 2 minute raw thoughts on your phone; our production team turns them into studio-grade reels with captions and branding.']
        ]
    ],
    [
        'slug' => 'paid-advertising',
        'short_title' => 'Paid Advertising',
        'title' => 'High-ROI Paid Advertising Campaigns for Coaching Businesses',
        'tagline' => 'Scale client acquisition on Meta, Google & YouTube with direct-response paid media.',
        'icon' => 'bi-megaphone-fill',
        'badge' => 'High-Velocity Scale',
        'image' => 'assets/images/service-lead-gen.jpg',
        'cta_text' => 'Launch High-ROI Ad Campaigns',
        'stats' => ['3.8x - 5.5x' => 'Target Return on Ad Spend', '$1.2M+' => 'Coaching Ad Spend Managed', 'Sub-60s' => 'Lead Lead Alerts', 'Zero' => 'Wasted Ad Dollars'],
        'summary' => 'Word-of-mouth is great, but paid advertising gives you a predictable volume knob you can turn up when you want more clients. We engineer, write, design, and manage high-converting Meta, Google Search, and YouTube ad campaigns that generate qualified client discovery calls profitably.',
        'problems_solved' => [
            'Burning ad spend on boosting posts that generate likes but zero clients',
            'High Cost Per Acquisition (CPA) on ads eating into coaching margins',
            'Ad accounts getting disabled or rejected due to compliance misunderstandings',
            'Ad creative fatigue causing discovery call costs to skyrocket over time',
            'Disconnect between ad messaging and the landing page causing high drop-offs'
        ],
        'key_features' => [
            'Laser-Targeted Audience Strategy (Intent Keywords & Custom Lookalikes)',
            'Direct-Response Ad Copywriting & Compelling Video Hook Engineering',
            'High-Converting Ad Creative Production (Static, Motion & VSLs)',
            'Strict Ad Network Policy Compliance & Account Safeguards',
            'Dynamic Retargeting Sequences for Warm Prospects Who Didn’t Book',
            'Real-Time Attribution Tracking (CPA, Show-Up Rate & Client Revenue)'
        ],
        'deliverables' => [
            'Full Campaign Architecture across Meta, Google & YouTube',
            'Complete Suite of Video Hooks, Ad Copy & Graphic Creatives',
            'Conversion API (CAPI) & Pixel Tracking Installation',
            'Weekly Performance Sprints & Bid Optimization'
        ],
        'faqs' => [
            ['q' => 'How much should I budget for advertising?', 'a' => 'We recommend starting with an ad spend of $1,000 to $2,500/month for initial testing, scaling up aggressively once unit economics and positive ROI are verified.'],
            ['q' => 'Should I run Meta (Facebook/Instagram) or Google Ads?', 'a' => 'Google Search is ideal for capturing high-intent prospects actively searching for coaching right now. Meta is superior for visual storytelling and scaling broad awareness.'],
            ['q' => 'Do you guarantee a specific number of clients?', 'a' => 'While no ethical agency guarantees revenue, our campaigns are structured with proven benchmarks and qualification hurdles to maximize your return on ad spend.'],
            ['q' => 'Who pays the ad network fees?', 'a' => 'You pay the ad platforms directly with your credit card so you retain 100% ownership of your ad accounts, data, and pixels.'],
            ['q' => 'How do we prevent low-quality leads from booking calls?', 'a' => 'Our ads filter prospects before they click, and our landing page qualification questionnaire eliminates anyone who doesn’t meet your budget and criteria.']
        ]
    ],
    [
        'slug' => 'reputation-management',
        'short_title' => 'Reputation Management',
        'title' => 'Automated Reputation & Review Generation for Coaches',
        'tagline' => 'Collect 5-star Google reviews and video testimonials on autopilot to dominate credibility.',
        'icon' => 'bi-star-fill',
        'badge' => 'Social Proof Engine',
        'image' => 'assets/images/service-business-growth.jpg',
        'cta_text' => 'Boost Coaching Reputation',
        'stats' => ['5.0 ★' => 'Target Review Rating', '78%' => 'Client Review Response Rate', '+45%' => 'Higher Conversion with Video', 'Automated' => 'Review Request Triggers'],
        'summary' => 'In coaching, trust is everything. Prospects search your name and company before booking a call. We install automated review collection systems that solicit 5-star Google reviews and video testimonials at the perfect psychological moment in your client journey.',
        'problems_solved' => [
            'Happy clients who praise your coaching verbally but never leave a public review',
            'Zero or weak Google Business reviews making you look like a beginner',
            'Uncomfortable manual outreach asking past clients for testimonials',
            'No automated system to showcase verified reviews on your website',
            'Competitors with inferior coaching winning clients simply because they have more 5-star stars'
        ],
        'key_features' => [
            'Automated SMS & Email Review Requests at Client Milestone Moments',
            'Frictionless 1-Click Google Review Direct Links & QR Code Generators',
            'Video Testimonial Collection System (No Software Download Needed for Clients)',
            'Smart Feedback Routing (5-Star reviews to Google; constructive feedback to you)',
            'Dynamic Website Social Proof Widgets & Case Study Sliders',
            'Reputation Monitoring Alerts & Review Response Protocols'
        ],
        'deliverables' => [
            'Automated Review Solicitation Sequence Deployed in Your CRM',
            'Custom Branded Video Testimonial Collection Page',
            'Dynamic Google Review Badges & Showcase Widget on Your Website',
            'Review Response Playbook for Google and Trustpilot'
        ],
        'faqs' => [
            ['q' => 'How does the automated review system know when to ask a client?', 'a' => 'We trigger review requests at moments of peak satisfaction — e.g. after session 4, upon goal achievement, or immediately following graduation.'],
            ['q' => 'What if a client leaves a less-than-positive review?', 'a' => 'Our smart routing asks clients to rate their experience privately first. Clients rating 5 stars are guided directly to Google; clients with suggestions are routed to a private coaching feedback form.'],
            ['q' => 'Can clients record video testimonials on their smartphones?', 'a' => 'Yes! Clients simply click a link on their smartphone, record a 60-second video without downloading any apps, and submit it directly to your dashboard.'],
            ['q' => 'Will this help my local Google Maps ranking?', 'a' => 'Tremendously. Review quantity, velocity, and keyword-rich client feedback are top ranking signals for Google Local SEO.'],
            ['q' => 'Can we collect reviews from past alumni as well?', 'a' => 'Yes. We run a dedicated "Alumni Review Campaign" that typically generates 15 to 40 verified 5-star reviews within the first 14 days.']
        ]
    ],
    [
        'slug' => 'local-seo',
        'short_title' => 'Local SEO & Google Business',
        'title' => 'Local SEO & Google Business Profile Optimization for Coaches',
        'tagline' => 'Dominate the Google Local 3-Pack and capture clients searching in your city and state.',
        'icon' => 'bi-geo-alt-fill',
        'badge' => 'Local Market Dominance',
        'image' => 'assets/images/service-sales-funnels.jpg',
        'cta_text' => 'Dominate Local Search',
        'stats' => ['Top 3' => 'Google Map Pack Placements', '3.2x' => 'More Phone Calls & Inquiries', '50+' => 'Local NAP Citations Built', '100%' => 'Verified Google Profile'],
        'summary' => 'Even if you coach online, high-value local clients want to work with coaches in their city or metro area. We optimize your Google Business Profile (GBP), build local citations, and engineer geo-targeted pages so you rank at the very top of Google Maps in your target market.',
        'problems_solved' => [
            'Invisible on Google Maps when clients search for coaching in your city',
            'Unverified, suspended, or poorly optimized Google Business Profile',
            'Competitors with lower credentials ranking above you in the local 3-pack',
            'Inconsistent NAP (Name, Address, Phone) data confusing Google algorithms',
            'Missing out on high-income local executives, founders, and families'
        ],
        'key_features' => [
            'Comprehensive Google Business Profile (GBP) Audit & Optimization',
            'Local 3-Pack Map Ranking Strategy for High-Intent Coaching Keywords',
            'Consistent Citation Building across Top 50+ US Business Directories',
            'Geo-Targeted City Landing Pages for Multi-Metro Coaching Reach',
            'Weekly Google Business Profile Posts, Offers, and FAQ Updates',
            'Review Velocity Optimization & Local Schema Markup Code'
        ],
        'deliverables' => [
            'Complete Google Business Profile Optimization & Category Selection',
            'Citation Clean-Up & 50+ High-Authority Local Directory Listings',
            'Geo-Targeted City Page Template Code for Your Website',
            'Monthly Google Maps Ranking Audit & Call Tracking Report'
        ],
        'faqs' => [
            ['q' => 'Do I need a physical commercial office to rank on Google Maps?', 'a' => 'No! You can set up your Google Business Profile as a "Service Area Business" (SAB) where your home address remains hidden while you rank for the entire city or metro area.'],
            ['q' => 'Can I rank in multiple nearby cities?', 'a' => 'Yes. We build specialized geo-targeted landing pages and configure your service radius so you attract clients across multiple suburbs and neighboring cities.'],
            ['q' => 'How long does Local SEO take to get into the Top 3 map pack?', 'a' => 'Most coaching practices enter the Top 3 map pack within 60 to 90 days following our profile optimization, citation cleanup, and review velocity setup.'],
            ['q' => 'Does this help with in-person or virtual coaching?', 'a' => 'Both. Many clients prefer hiring a coach who lives in their city even if all coaching sessions are conducted via Zoom.'],
            ['q' => 'How do we track calls from Google Maps?', 'a' => 'We configure a dedicated tracking phone number on your Google profile so you can trace every phone inquiry and consultation request directly to Google Maps.']
        ]
    ],
    [
        'slug' => 'coaching-business-growth',
        'short_title' => 'Coaching Business Growth',
        'title' => 'Strategic Business Growth & Offer Scaling for Coaching Practices',
        'tagline' => 'Scale from 1-on-1 burnout into high-ticket packages, leveraged group programs, and predictable revenue.',
        'icon' => 'bi-award-fill',
        'badge' => 'Executive Strategic Advisory',
        'image' => 'assets/images/service-business-growth.jpg',
        'cta_text' => 'Schedule Growth Strategy Call',
        'stats' => ['3.8x' => 'Average Revenue Expansion', '$25k+' => 'High-Ticket Offer Architecture', '90 Days' => 'Turnaround Sprint Cadence', '1-on-1' => 'Direct Growth Partner'],
        'summary' => 'Marketing works best when your business foundation is rock-solid. We work alongside coaching founders to package irresistible high-ticket offers, optimize pricing models, build predictable sales discovery scripts, and transition from hourly billing to high-margin recurring advisory.',
        'problems_solved' => [
            'Trapped trading dollars for hours with zero time freedom or leverage',
            'Undercharging for transformative coaching results due to weak offer positioning',
            'Stagnant revenue plateaus where you can’t break past $10k or $25k per month',
            'Anxiety during discovery calls and struggling to overcome price objections',
            'Lack of operational systems to deliver coaching without working 60+ hours a week'
        ],
        'key_features' => [
            'Irresistible High-Ticket Offer Architecture ($3,000 to $25,000+ Packages)',
            'Consultative Sales Discovery Call Scripts & Objection Handling Playbooks',
            'Leveraged Delivery Models (Hybrid 1-on-1 + Group Masterminds + Portal)',
            'Pricing Optimization & Client Lifetime Value (LTV) Expansion Strategy',
            'Financial Unit Economics Modeling & Operational Delegation Roadmaps',
            'Bi-Weekly Strategic Growth Reviews with Senior US Growth Advisors'
        ],
        'deliverables' => [
            'Custom 90-Day Coaching Business Growth Blueprint',
            'High-Ticket Offer Pitch Deck & Client Agreement Templates',
            'Discovery Call Closing Framework & Deal Recording Review Clinics',
            'Bi-Weekly 1-on-1 Strategic Consulting & Execution Governance'
        ],
        'faqs' => [
            ['q' => 'What type of coaches is this advisory designed for?', 'a' => 'Coaching professionals and practices currently generating between $5,000 and $100,000+ per month who want systems to scale to the next revenue tier without burning out.'],
            ['q' => 'How is this different from generic coaching programs?', 'a' => 'We are not "life coaches for life coaches." We are technical growth architects and commercial operators who build actual marketing funnels, CRMs, and sales engines for your practice.'],
            ['q' => 'Will you help me increase my coaching prices?', 'a' => 'Yes. By restructuring your offer around concrete transformations and enterprise ROI, most of our clients double or triple their program pricing with higher closing rates.'],
            ['q' => 'What is the time commitment required?', 'a' => 'We conduct bi-weekly 60-minute strategic deep dives supplemented by ongoing Slack and asynchronous execution support.'],
            ['q' => 'How do I get started?', 'a' => 'We begin with a complimentary 30-minute Coaching Growth Diagnostic where we analyze your current pricing, pipeline, and bottlenecks to determine mutual fit.']
        ]
    ]
];

// 2. COACHING INDUSTRIES DATA (Comprehensive Category Architecture)
$industries = [
    'business-professional' => [
        'category_name' => 'Business & Professional Coaching',
        'category_icon' => 'bi-briefcase-fill',
        'description' => 'Targeting corporate executives, venture-backed founders, enterprise sales reps, and ambitious business leaders.',
        'niches' => [
            ['slug' => 'business-coaches', 'name' => 'Business Coaches', 'tagline' => 'Scale B2B revenue and build automated systems for small-to-midsize businesses.'],
            ['slug' => 'executive-coaches', 'name' => 'Executive Coaches', 'tagline' => 'High-stakes C-Suite advisory, executive presence, and organizational leadership.'],
            ['slug' => 'leadership-coaches', 'name' => 'Leadership Coaches', 'tagline' => 'Empower senior directors to manage teams, resolve conflict, and drive vision.'],
            ['slug' => 'entrepreneur-coaches', 'name' => 'Entrepreneur Coaches', 'tagline' => 'Guide visionary founders through rapid product-market fit and commercial scale.'],
            ['slug' => 'startup-coaches', 'name' => 'Startup Coaches', 'tagline' => 'Fundraising advisory, investor pitch decks, and early-stage traction engines.'],
            ['slug' => 'small-business-coaches', 'name' => 'Small Business Coaches', 'tagline' => 'Turn chaotic owner-operator companies into systematized, profitable firms.'],
            ['slug' => 'corporate-coaches', 'name' => 'Corporate Coaches', 'tagline' => 'Enterprise cultural alignment, leadership development, and employee retention.'],
            ['slug' => 'management-coaches', 'name' => 'Management Coaches', 'tagline' => 'Train first-time managers and department heads in operational execution.'],
            ['slug' => 'sales-coaches', 'name' => 'Sales Coaches', 'tagline' => 'Pipeline acceleration, high-ticket deal closing scripts, and commission mastery.'],
            ['slug' => 'marketing-coaches', 'name' => 'Marketing Coaches', 'tagline' => 'Brand positioning, acquisition channels, and customer lifetime value optimization.'],
            ['slug' => 'career-coaches', 'name' => 'Career Coaches', 'tagline' => 'Executive resume audits, high-stakes interview prep, and salary negotiation.'],
            ['slug' => 'professional-development-coaches', 'name' => 'Professional Development Coaches', 'tagline' => 'Strategic career progression, public speaking authority, and board governance.'],
            ['slug' => 'productivity-coaches', 'name' => 'Productivity Coaches', 'tagline' => 'Time-blocking architectures, deep-work habits, and cognitive energy mastery.'],
            ['slug' => 'performance-coaches', 'name' => 'Performance Coaches', 'tagline' => 'Peak mental clarity, flow state triggers, and sustained stamina under pressure.']
        ]
    ],
    'life-personal' => [
        'category_name' => 'Life & Personal Development Coaching',
        'category_icon' => 'bi-heart-pulse-fill',
        'description' => 'Helping individuals overcome limiting beliefs, achieve breakthrough goals, and master personal transformation.',
        'niches' => [
            ['slug' => 'life-coaches', 'name' => 'Life Coaches', 'tagline' => 'Holistic life design, purpose alignment, and transformative life transitions.'],
            ['slug' => 'personal-development-coaches', 'name' => 'Personal Development Coaches', 'tagline' => 'Unlocking full potential through self-awareness and intentional daily habits.'],
            ['slug' => 'confidence-coaches', 'name' => 'Confidence Coaches', 'tagline' => 'Overcome imposter syndrome, command social authority, and speak with conviction.'],
            ['slug' => 'mindset-coaches', 'name' => 'Mindset Coaches', 'tagline' => 'Rewire self-sabotaging thoughts and cultivate unstoppable growth orientation.'],
            ['slug' => 'accountability-coaches', 'name' => 'Accountability Coaches', 'tagline' => 'Strict execution frameworks, daily tracking, and zero-excuse habit governance.'],
            ['slug' => 'goal-setting-coaches', 'name' => 'Goal Setting Coaches', 'tagline' => 'Break large visions into tangible 90-day execution milestones that get finished.'],
            ['slug' => 'motivation-coaches', 'name' => 'Motivation Coaches', 'tagline' => 'Reignite inner fire, break through emotional slumps, and sustain momentum.'],
            ['slug' => 'success-coaches', 'name' => 'Success Coaches', 'tagline' => 'Holistic achievement systems uniting wealth, purpose, relationships, and health.'],
            ['slug' => 'transformation-coaches', 'name' => 'Transformation Coaches', 'tagline' => 'Deep identity shifts that redefine self-worth, career trajectory, and life trajectory.']
        ]
    ],
    'health-wellness' => [
        'category_name' => 'Health & Wellness Coaching',
        'category_icon' => 'bi-activity',
        'description' => 'Guiding clients to peak physical health, restorative sleep, metabolic vitality, and sustained longevity.',
        'niches' => [
            ['slug' => 'health-coaches', 'name' => 'Health Coaches', 'tagline' => 'Integrative holistic wellness, chronic inflammation reduction, and energy.'],
            ['slug' => 'wellness-coaches', 'name' => 'Wellness Coaches', 'tagline' => 'Mind-body balance, restorative practices, and sustainable living routines.'],
            ['slug' => 'fitness-coaches', 'name' => 'Fitness Coaches', 'tagline' => 'Custom hypertrophy, strength conditioning, and body recomposition programs.'],
            ['slug' => 'weight-management-coaches', 'name' => 'Weight Management Coaches', 'tagline' => 'Sustainable fat loss, non-restrictive nutrition, and emotional eating freedom.'],
            ['slug' => 'nutrition-coaches', 'name' => 'Nutrition Coaches', 'tagline' => 'Macro-nutrient balancing, gut microbiome health, and metabolic repair.'],
            ['slug' => 'lifestyle-coaches', 'name' => 'Lifestyle Coaches', 'tagline' => 'Harmonizing demanding work schedules with restorative wellness rituals.'],
            ['slug' => 'stress-management-coaches', 'name' => 'Stress Management Coaches', 'tagline' => 'Cortisol reduction, nervous system regulation, and burnout recovery.'],
            ['slug' => 'sleep-coaches', 'name' => 'Sleep Coaches', 'tagline' => 'Circadian rhythm optimization, deep REM sleep architecture, and sleep hygiene.'],
            ['slug' => 'healthy-habit-coaches', 'name' => 'Healthy Habit Coaches', 'tagline' => 'Micro-habits, behavioral psychology, and effortless healthy daily automation.']
        ]
    ],
    'relationship-family' => [
        'category_name' => 'Relationship & Family Coaching',
        'category_icon' => 'bi-people-fill',
        'description' => 'Restoring intimacy, resolving deep communication fractures, and strengthening foundational family dynamics.',
        'niches' => [
            ['slug' => 'relationship-coaches', 'name' => 'Relationship Coaches', 'tagline' => 'Transformative communication, secure attachment styles, and conflict resolution.'],
            ['slug' => 'marriage-coaches', 'name' => 'Marriage Coaches', 'tagline' => 'Rebuilding marital trust, emotional connection, and long-term partnership.'],
            ['slug' => 'dating-coaches', 'name' => 'Dating Coaches', 'tagline' => 'Modern dating psychology, authentic boundary setting, and finding high-value partners.'],
            ['slug' => 'divorce-coaches', 'name' => 'Divorce Coaches', 'tagline' => 'Navigating separation with emotional dignity, legal clarity, and co-parenting peace.'],
            ['slug' => 'family-coaches', 'name' => 'Family Coaches', 'tagline' => 'Resolving inter-generational friction, establishing household peace, and unity.'],
            ['slug' => 'parenting-coaches', 'name' => 'Parenting Coaches', 'tagline' => 'Conscious parenting tools, positive reinforcement, and teen communication.'],
            ['slug' => 'couples-coaches', 'name' => 'Couples Coaches', 'tagline' => 'Premarital alignment, intimacy deepening, and shared financial/life vision.']
        ]
    ],
    'financial' => [
        'category_name' => 'Financial Coaching',
        'category_icon' => 'bi-currency-dollar',
        'description' => 'Empowering individuals and families to master cash flow, eliminate debt, and build generational wealth.',
        'niches' => [
            ['slug' => 'financial-coaches', 'name' => 'Financial Coaches', 'tagline' => 'Total money makeover, net worth tracking, and intentional financial freedom.'],
            ['slug' => 'money-coaches', 'name' => 'Money Coaches', 'tagline' => 'Healing toxic money scripts, scarcity mindset, and guilt-free wealth creation.'],
            ['slug' => 'budget-coaches', 'name' => 'Budget Coaches', 'tagline' => 'Zero-based cash flow architectures, automated savings buckets, and debt freedom.'],
            ['slug' => 'wealth-coaches', 'name' => 'Wealth Coaches', 'tagline' => 'Generational asset accumulation, investment psychology, and passive income systems.'],
            ['slug' => 'retirement-coaches', 'name' => 'Retirement Coaches', 'tagline' => 'Non-financial retirement lifestyle design, purpose transition, and financial confidence.'],
            ['slug' => 'financial-wellness-coaches', 'name' => 'Financial Wellness Coaches', 'tagline' => 'Reducing financial anxiety, spousal money alignment, and financial peace of mind.']
        ]
    ],
    'education-student' => [
        'category_name' => 'Education & Student Coaching',
        'category_icon' => 'bi-mortarboard-fill',
        'description' => 'Supporting high school, collegiate, and post-graduate learners in academic excellence and admission triumphs.',
        'niches' => [
            ['slug' => 'academic-coaches', 'name' => 'Academic Coaches', 'tagline' => 'Executive functioning, study skills, and GPA acceleration for ambitious students.'],
            ['slug' => 'student-success-coaches', 'name' => 'Student Success Coaches', 'tagline' => 'College transition adaptation, independent time mastery, and campus thriving.'],
            ['slug' => 'college-admission-coaches', 'name' => 'College Admission Coaches', 'tagline' => 'Ivy League & top-tier university application strategy, essays, and interview coaching.'],
            ['slug' => 'study-coaches', 'name' => 'Study Coaches', 'tagline' => 'Active recall techniques, spaced repetition habits, and exam anxiety elimination.'],
            ['slug' => 'learning-coaches', 'name' => 'Learning Coaches', 'tagline' => 'Neurodivergent support (ADHD, dyslexia), personalized pacing, and confidence.'],
            ['slug' => 'education-coaches', 'name' => 'Education Coaches', 'tagline' => 'Lifelong learning blueprints, career reskilling, and advanced credential roadmap.'],
            ['slug' => 'test-preparation-coaches', 'name' => 'Test Preparation Coaches', 'tagline' => 'SAT, ACT, GRE, GMAT, MCAT, and LSAT score maximization methodologies.']
        ]
    ]
];

// 3. CASE STUDIES DATA (Verified Client Transformations Across the USA)
$case_studies = [
    [
        'slug' => 'chicago-executive-coaching-scale',
        'coach_name' => 'David Sterling, MBA',
        'coach_type' => 'Executive & C-Suite Coach',
        'category' => 'executive',
        'location' => 'Chicago, IL',
        'headline' => 'From $9,000/mo to $48,000/mo in 90 Days with GoHighLevel & LinkedIn Lead Generation',
        'highlight' => '$9,000/mo → $48,000/mo (+433%)',
        'quote' => 'Coaching 360 Growth Lab didn\'t just give me advice; they built my entire commercial infrastructure. I went from praying for referrals to choosing which C-Suite clients I want to work with.',
        'image' => 'assets/images/coaching-hero.jpg',
        'tech_stack' => ['GoHighLevel CRM', 'LinkedIn API Funnel', 'Stripe Billing', 'High-Ticket VSL'],
        'metrics' => [
            'Monthly Revenue' => '$48,000 (from $9,000)',
            'High-Ticket Packages' => '$15,000 per engagement',
            'Discovery Calls' => '28 qualified / mo',
            'Time Saved' => '16 hrs / week on admin'
        ],
        'challenge' => 'David was an elite former VP coaching Fortune 1000 executives, but his client acquisition relied purely on unpredictable referrals. He was spending 15+ hours weekly sending manual follow-up emails, and his website was a static 2017 brochure with zero conversion triggers.',
        'solution' => 'Coaching 360 Growth Lab USA built a high-converting executive landing page, deployed a certified GoHighLevel CRM pipeline, and launched an outbound LinkedIn authority funnel targeting VPs and Directors in tech and finance.',
        'result' => 'Within 90 days, David secured 3 enterprise retainer contracts at $15,000 each and built a predictable pipeline generating 6 to 8 qualified discovery calls every single week.'
    ],
    [
        'slug' => 'san-diego-health-coach-funnel',
        'coach_name' => 'Elena Rostova, MS, CNC',
        'coach_type' => 'Holistic Health & Wellness Coach',
        'category' => 'health',
        'location' => 'San Diego, CA',
        'headline' => '114 Qualified Client Bookings in 60 Days via Meta Funnels & Automated SMS Nurture',
        'highlight' => '114 Bookings & $84k in 60 Days',
        'quote' => 'Transitioning from $120/hr burnout into a leveraged $3,500 cohort program transformed my sanity and tripled my monthly income. The automated SMS booking engine had an 89% show-up rate!',
        'image' => 'assets/images/service-lead-gen.jpg',
        'tech_stack' => ['Meta Video Funnel', 'GoHighLevel SMS AI', 'Acuity Calendar', 'Cohort Portal'],
        'metrics' => [
            'Qualified Applications' => '114 in 60 days',
            'Show-Up Rate' => '89% (via SMS AI)',
            'Program Enrollees' => '24 new clients',
            'Return on Ad Spend' => '4.8x ROAS'
        ],
        'challenge' => 'Elena was charging $120/hr for 1-on-1 sessions, working 55 hours a week, and suffering severe burnout. Her Meta ads were sending traffic to her Instagram profile with zero tracking or conversion follow-up.',
        'solution' => 'We packaged her knowledge into an irresistible $3,500 12-week high-ticket health transformation program, designed a direct-response video application funnel, and connected automated two-way SMS reminders.',
        'result' => 'Elena generated 114 qualified applications, enrolled 24 high-ticket clients, generated over $84,000 in revenue in 60 days, and reclaimed 25 hours per week by transitioning into leveraged cohort coaching.'
    ],
    [
        'slug' => 'dallas-financial-coach-local-seo',
        'coach_name' => 'Marcus Holloway, CFP® Coach',
        'coach_type' => 'Financial & Wealth Coach',
        'category' => 'financial',
        'location' => 'Dallas, TX',
        'headline' => 'Ranking #1 in the Google Local 3-Pack Across DFW Generating 30+ Organic Monthly Inquiries',
        'highlight' => '#1 Google Local & 32 Calls/mo',
        'quote' => 'We haven\'t spent a dime on paid ads in four months. The local SEO architecture and 64 automated reviews put us at the top of Google Maps across the entire Dallas-Fort Worth metroplex.',
        'image' => 'assets/images/coaching-growth.jpg',
        'tech_stack' => ['Google Local 3-Pack', 'Review Generation Engine', 'Local Schema SEO', 'CallRail Tracking'],
        'metrics' => [
            'Google Map Ranking' => '#1 for DFW Coaching',
            'Organic Inquiries' => '32 calls / month',
            'Ad Spend Required' => '$0 ongoing ad cost',
            'Google Review Count' => '64 five-star reviews'
        ],
        'challenge' => 'Marcus wanted to attract high-earning corporate employees and business owners in the Dallas-Fort Worth metroplex. He was invisible on Google Maps, and competitors with fewer credentials were capturing all local search volume.',
        'solution' => 'Coaching 360 Growth Lab executed a complete Google Business Profile optimization, launched an automated review-generation campaign to past clients, built 55 local citations, and published geo-targeted Dallas coaching pillar pages.',
        'result' => 'Marcus surged to the #1 position in the Google Local 3-Pack, collected 64 verified 5-star reviews, and now receives over 30 high-intent discovery call requests organically every month without paying a dollar in ads.'
    ],
    [
        'slug' => 'new-york-career-leadership-transition',
        'coach_name' => 'Victoria Chen, PCC',
        'coach_type' => 'Career & Leadership Transition Coach',
        'category' => 'career',
        'location' => 'New York, NY',
        'headline' => 'Transitioning from Corporate VP to Full-Time $36k/mo Executive Career Advisory',
        'highlight' => '$0 to $36,000/mo Retainers in 120 Days',
        'quote' => 'Leaving a 15-year corporate career to start coaching was terrifying. Coaching 360 built my high-converting authority website, executive lead magnet, and multi-step intake questionnaire. I signed 6 retainer clients in my first quarter.',
        'image' => 'assets/images/coaching-hero.jpg',
        'tech_stack' => ['Custom Authority Website', 'GoHighLevel Funnel', 'LinkedIn Ads', 'Stripe Subscriptions'],
        'metrics' => [
            'Monthly Retainers' => '$36,000 / mo recurring',
            'Avg Client Value' => '$6,000 per engagement',
            'Close Rate' => '42% on discovery calls',
            'Funnel Conversion' => '6.8% visitor-to-lead'
        ],
        'challenge' => 'Victoria had deep corporate credibility but zero digital marketing infrastructure. She had no website, no CRM, and was reliant on cold messaging alumni on LinkedIn without a defined system or pricing strategy.',
        'solution' => 'We engineered a bespoke personal brand website, created a "Career Transition Authority Blueprint" lead magnet, and built an automated GHL qualification pipeline with mandatory calendar screening.',
        'result' => 'Victoria attracted 45+ applications, signed 6 enterprise executives at $6,000 per engagement, and fully replaced her corporate executive salary within 4 months.'
    ],
    [
        'slug' => 'austin-business-agency-scale',
        'coach_name' => 'Brandon Brooks',
        'coach_type' => 'Business & Agency Scale Coach',
        'category' => 'business',
        'location' => 'Austin, TX',
        'headline' => 'Filling a 20-Seat $5,000 Mastermind in 21 Days with Automated VSL & Email Speed-to-Lead',
        'highlight' => '$92,000 Cohort Launch (5.4x ROAS)',
        'quote' => 'We had tried running Meta ads ourselves and burned $6,000 with zero calls booked. Coaching 360 overhauled our video sales letter, automated our speed-to-lead follow-up, and filled all 20 seats in 3 weeks.',
        'image' => 'assets/images/service-lead-gen.jpg',
        'tech_stack' => ['Direct-Response VSL', 'GHL Automated SMS', 'Meta Conversion API', 'Zapier Automation'],
        'metrics' => [
            'Cohort Revenue' => '$92,000 gross intake',
            'Mastermind Seats' => '20 filled / 20 capacity',
            'Speed-to-Lead' => '< 90 sec automated outreach',
            'Campaign ROAS' => '5.4x return on spend'
        ],
        'challenge' => 'Brandon was running a coaching practice for boutique agency founders. His ad budget was being wasted on generic 60-minute webinars where attendees watched for free tips but nobody booked the high-ticket backend.',
        'solution' => 'We replaced the long webinar with a punchy 12-minute Direct-Response VSL, integrated an application qualification gatekeeper, and implemented an instant 90-second SMS and phone speed-to-lead workflow.',
        'result' => 'The campaign generated 82 qualified applications and enrolled 20 agency founders at $4,600 each ($92,000 total) at a 5.4x ROAS with zero wasted ad spend.'
    ],
    [
        'slug' => 'miami-high-performance-mindset',
        'coach_name' => 'Dr. Rachel Vance, PhD',
        'coach_type' => 'High-Performance & Mindset Coach',
        'category' => 'mindset',
        'location' => 'Miami, FL',
        'headline' => 'Packaging Clinical Neuro-Mindset Expertise into Premium $12,000 In-Person VIP Experiences',
        'highlight' => '$12,000 VIP Days & 5.2x Practice ROI',
        'quote' => 'I was undercharging for hourly sessions. Coaching 360 helped me reposition into high-performance executive mindset consulting with $12,000 VIP Intensive Days. Slashed my client hours by 70% while doubling revenue.',
        'image' => 'assets/images/coaching-growth.jpg',
        'tech_stack' => ['Google Search Ads', 'GHL High-Ticket Pipeline', 'DocuSign API', 'Stripe Invoicing'],
        'metrics' => [
            'VIP Package Price' => '$12,000 per client',
            'Quarterly Revenue' => '$72,000 from 6 VIP days',
            'Delivery Time' => '1 day / month in-person',
            'Inbound Close Rate' => '55% on qualified calls'
        ],
        'challenge' => 'Dr. Vance had elite neuroscience credentials but was selling $150 hourly sessions. Her schedule was jammed with 30 clients a week, leading to chronic exhaustion with zero time for high-level thought leadership or scaling.',
        'solution' => 'We repackaged her methodology into a premium 1-Day Executive VIP Breakthrough Retreat ($12,000), launched a high-authority Google Search campaign, and implemented an executive qualification gatekeeper.',
        'result' => 'She booked 6 VIP Intensive Days in her first quarter ($72,000 in revenue), slashed her active delivery hours by 70%, and built an exclusive waiting list for future retreat dates.'
    ]
];

// 4. TOP US LOCATIONS FOR LOCAL SEO & EXPANSION
$top_locations = [
    ['slug' => 'new-york', 'city' => 'New York', 'state' => 'NY', 'metro' => 'New York Metro Area', 'coaches_served' => '240+'],
    ['slug' => 'los-angeles', 'city' => 'Los Angeles', 'state' => 'CA', 'metro' => 'Greater Los Angeles', 'coaches_served' => '195+'],
    ['slug' => 'chicago', 'city' => 'Chicago', 'state' => 'IL', 'metro' => 'Chicagoland Area', 'coaches_served' => '160+'],
    ['slug' => 'houston', 'city' => 'Houston', 'state' => 'TX', 'metro' => 'Houston Metro', 'coaches_served' => '130+'],
    ['slug' => 'dallas-fort-worth', 'city' => 'Dallas-Fort Worth', 'state' => 'TX', 'metro' => 'DFW Metroplex', 'coaches_served' => '145+'],
    ['slug' => 'austin', 'city' => 'Austin', 'state' => 'TX', 'metro' => 'Austin-Round Rock', 'coaches_served' => '110+'],
    ['slug' => 'miami', 'city' => 'Miami', 'state' => 'FL', 'metro' => 'South Florida Metro', 'coaches_served' => '125+'],
    ['slug' => 'atlanta', 'city' => 'Atlanta', 'state' => 'GA', 'metro' => 'Atlanta Metro Area', 'coaches_served' => '140+'],
    ['slug' => 'denver', 'city' => 'Denver', 'state' => 'CO', 'metro' => 'Denver-Boulder Area', 'coaches_served' => '95+'],
    ['slug' => 'seattle', 'city' => 'Seattle', 'state' => 'WA', 'metro' => 'Puget Sound Region', 'coaches_served' => '105+'],
    ['slug' => 'phoenix', 'city' => 'Phoenix', 'state' => 'AZ', 'metro' => 'Phoenix Valley', 'coaches_served' => '90+'],
    ['slug' => 'boston', 'city' => 'Boston', 'state' => 'MA', 'metro' => 'Greater Boston Area', 'coaches_served' => '115+']
];

// 5. COACHING GROWTH PROGRAMS & ACCELERATORS (Classes & Masterclasses for Coaches)
$growth_programs = [
    [
        'slug' => 'client-acquisition-accelerator',
        'title' => 'The 12-Week High-Ticket Client Acquisition Accelerator',
        'tagline' => 'A structured implementation program to build your predictable discovery call engine and scale to $25k+/mo.',
        'duration' => '12 Weeks',
        'format' => 'Cohort + 1-on-1 Advisory',
        'level' => 'Active Coaching Practitioners',
        'image' => 'assets/images/service-lead-gen.jpg',
        'icon' => 'bi-graph-up-arrow',
        'badge' => 'Flagship Accelerator',
        'curriculum' => [
            'Week 01-02: High-Ticket Offer Architecture & Niche Positioning',
            'Week 03-04: Direct-Response Landing Page & VSL Funnel Build',
            'Week 05-06: Pre-Qualification Questionnaires & Screening Systems',
            'Week 07-08: Inbound Traffic Engine: Google & Meta Paid Campaigns',
            'Week 09-10: Automated Speed-to-Lead SMS & Calendar Booking Sync',
            'Week 11-12: High-Ticket Discovery Call Closing & Pipeline Scaling'
        ],
        'outcomes' => [
            'Live turnkey client acquisition funnel generating 15–25 qualified applications monthly',
            'Repackaged $3,000 to $15,000 high-ticket coaching programs',
            'Complete GoHighLevel CRM tracking every stage of your sales pipeline'
        ]
    ],
    [
        'slug' => 'gohighlevel-masterclass',
        'title' => 'Turnkey GoHighLevel CRM & Automation Masterclass',
        'tagline' => 'Master the #1 CRM platform for coaching businesses: pipelines, SMS/email sequences, and calendar sync.',
        'duration' => '6 Weeks',
        'format' => 'Interactive Masterclass',
        'level' => 'All Coaching Disciplines',
        'image' => 'assets/images/service-ghl.jpg',
        'icon' => 'bi-gear-wide-connected',
        'badge' => 'Tech & Automation',
        'curriculum' => [
            'Module 01: GoHighLevel Account Setup & Domain Authentication',
            'Module 02: Pipeline Stages & Deal Attribution Architecture',
            'Module 03: 2-Way Speed-to-Lead SMS & Email Nurture Workflows',
            'Module 04: Calendar Booking, Zoom Sync & Automated Reminders',
            'Module 05: Automated 5-Star Review Generation & Reputation Loops',
            'Module 06: Executive ROI Dashboards & KPI Monitoring'
        ],
        'outcomes' => [
            'Fully configured, production-ready GoHighLevel sub-account',
            'Reclaimed 15+ hours per week of manual administrative work',
            '88%+ discovery call show-up rates with 2-way SMS confirmation'
        ]
    ],
    [
        'slug' => 'google-local-seo-intensive',
        'title' => 'Google Local 3-Pack & Organic Search Intensive',
        'tagline' => 'Dominate Google search results and capture high-intent local and national coaching clients organically.',
        'duration' => '8 Weeks',
        'format' => 'Strategic Implementation',
        'level' => 'Local & National Coaches',
        'image' => 'assets/images/coaching-growth.jpg',
        'icon' => 'bi-search',
        'badge' => 'SEO & Visibility',
        'curriculum' => [
            'Stage 01: High-Intent Coaching Keyword Research & Competitor Gap Audit',
            'Stage 02: Google Business Profile (GBP) 100% Optimization & Categories',
            'Stage 03: City-Specific Coaching Landing Pages & Silo Architecture',
            'Stage 04: Local Citation Building & Authority Directory Submissions',
            'Stage 05: High-Authority Digital PR & Coaching Backlink Acquisition',
            'Stage 06: Review Velocity Systems & Google Map 3-Pack Dominance'
        ],
        'outcomes' => [
            'Top 3 ranking on Google Local Search for your coaching specialty',
            'Zero ongoing ad spend for high-value organic discovery appointments',
            'Long-term digital authority asset producing recurring client inquiries'
        ]
    ],
    [
        'slug' => 'high-ticket-offer-bootcamp',
        'title' => 'High-Ticket Offer Architecture & C-Suite Positioning Bootcamp',
        'tagline' => 'Package your expertise into premium $5,000–$25,000 corporate and executive coaching programs.',
        'duration' => '4 Weeks',
        'format' => 'Executive Intensive',
        'level' => 'Executive, Business & Leadership Coaches',
        'image' => 'assets/images/coaching-hero.jpg',
        'icon' => 'bi-award-fill',
        'badge' => 'High-Ticket Advisory',
        'curriculum' => [
            'Session 01: Escaping the Hourly Trap: Value-Based Transformation Pricing',
            'Session 02: Crafting the Irresistible C-Suite Transformation Promise',
            'Session 03: Designing High-Stakes Diagnostic Intake Proposals',
            'Session 04: The Consultative Discovery Call Closing Framework'
        ],
        'outcomes' => [
            'Refined enterprise-grade high-ticket proposal ready to present to CEOs',
            'Confidence to charge $10,000+ per client engagement',
            'Zero pricing objections through outcome-based positioning'
        ]
    ],
    [
        'slug' => 'ai-automation-sprint',
        'title' => 'AI Agents & Speed-to-Lead Automation 14-Day Sprint',
        'tagline' => 'Deploy custom AI voice and chat agents to answer coaching inquiries and book calls 24/7.',
        'duration' => '2 Weeks',
        'format' => 'Rapid Deployment Sprint',
        'level' => 'Modern Coaches',
        'image' => 'assets/images/coaching-workshop.jpg',
        'icon' => 'bi-robot',
        'badge' => 'AI Intelligence',
        'curriculum' => [
            'Sprint 01: Custom AI Knowledge Base Training on Your Coaching Methodology',
            'Sprint 02: Website Chatbot & SMS AI Agent Deployment',
            'Sprint 03: Live Calendar Sync & Automated Screening Rules',
            'Sprint 04: Multi-Channel Testing & Objection Handling Tuning'
        ],
        'outcomes' => [
            '24/7 instant lead qualification in under 30 seconds',
            'Zero missed discovery calls from after-hours website traffic',
            'Automated calendar booking integrated directly into GoHighLevel'
        ]
    ],
    [
        'slug' => 'practice-scale-mastermind',
        'title' => 'The 7-Figure Coaching Practice Executive Mastermind',
        'tagline' => 'Exclusive advisory for established coaching practices scaling from 1-on-1 into leveraged cohort engines.',
        'duration' => '6 Months',
        'format' => 'Private Mastermind + Advisory',
        'level' => 'Coaches Generating $15k+/mo',
        'image' => 'assets/images/service-business-growth.jpg',
        'icon' => 'bi-trophy-fill',
        'badge' => 'Executive Mastermind',
        'curriculum' => [
            'Phase 01: Transitioning from 1-on-1 to Leveraged Group Coaching',
            'Phase 02: Building a Junior Coaching Bench & Quality Control',
            'Phase 03: Advanced Paid Media Scaling ($10k+ Monthly Ad Spend)',
            'Phase 04: Evergreen Funnel Systems & Organic Referral Loops'
        ],
        'outcomes' => [
            'Scale revenue past $50k–$100k/mo while cutting delivery hours in half',
            'Community of elite American coaches sharing live campaign data',
            'Dedicated fractional CMO and GoHighLevel technical team'
        ]
    ]
];

// 6. HELPER FUNCTIONS
function getServiceBySlug($slug, $services) {
    $aliases = [
        'business-growth-coaching' => 'coaching-business-growth',
        'ghl-services'             => 'gohighlevel',
        'marketing-automation'     => 'crm-automation',
        'sales-funnels'            => 'website-development'
    ];
    if (isset($aliases[$slug])) {
        $slug = $aliases[$slug];
    }

    foreach ($services as $s) {
        if ($s['slug'] === $slug) {
            return $s;
        }
    }
    return null;
}

function serviceBySlug($slug, $services) {
    return getServiceBySlug($slug, $services);
}

function getProgramBySlug($slug, $growth_programs) {
    foreach ($growth_programs as $p) {
        if ($p['slug'] === $slug) {
            return $p;
        }
    }
    return null;
}

function getIndustryBySlug($slug, $industries) {
    foreach ($industries as $catKey => $catData) {
        foreach ($catData['niches'] as $niche) {
            if ($niche['slug'] === $slug) {
                return array_merge($niche, [
                    'category_key' => $catKey,
                    'category_name' => $catData['category_name'],
                    'category_icon' => $catData['category_icon']
                ]);
            }
        }
    }
    return null;
}

function getCaseStudyBySlug($slug, $case_studies) {
    foreach ($case_studies as $cs) {
        if ($cs['slug'] === $slug) {
            return $cs;
        }
    }
    return null;
}

function getLocationBySlug($slug, $top_locations) {
    foreach ($top_locations as $loc) {
        if ($loc['slug'] === $slug) {
            return $loc;
        }
    }
    return null;
}

