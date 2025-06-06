<?php
/*
Template Name: AI Lead Gen Landing
Description: Landing page for AI-powered lead generation service targeting elevator & smart-building companies in Nigeria.
*/

//get_header();

$image_base = get_stylesheet_directory_uri() . '/assets/img/';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AI-Powered Lead Gen Landing</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-black font-sans leading-relaxed">

  <!-- HERO SECTION -->
  <section class="bg-white py-16 px-4">
    <div class="max-w-4xl mx-auto text-center">
      <p>AI-Powered, Automated Qualifying</p>
      <h1 class="text-4xl sm:text-5xl font-extrabold uppercase leading-none">
      Consistently Attract <span class="bg-[#CCFF00] text-black px-2">High-Intent</span> Construction 
        <span class="bg-[#CCFF00] text-black px-2">Leads</span> &nbsp;— 
        <span class="text-black px-2">Without Lifting a Finger</span>
      </h1>
      <p class="mt-6 text-lg sm:text-xl text-black">
      We help elevator and smart building system companies in Nigeria capture and convert project-ready leads using AI-powered funnels — so your sales team focuses only on prospects that matter.
      </p>
      <div class="mt-8">
        <a href="https://wa.me/234YOURNUMBERHERE?text=Hi%20I%20want%20to%20see%20a%20demo%20of%20your%20AI-powered%20lead-gen%20service." 
           class="inline-block bg-blue-700 hover:bg-blue-800 text-white font-bold uppercase py-6 px-12 rounded-full transition">
          👉 Book Free Demo 
        </a>
      </div>
      <!-- Placeholder for embedded video thumbnail -->
      <div class="mt-10">
        <img src="<?php echo esc_url( $image_base . 'ai-lead-gen-hero.webp' ); ?>"
             alt="Demo Video Thumbnail" 
             class="mx-auto rounded-lg shadow-lg w-full max-w-2xl" />
      </div>
    </div>
  </section>

  <!-- PAIN SECTION -->
  <section class="bg-gray-50 py-16 px-4">
    <div class="max-w-3xl mx-auto text-center">
      <h2 class="text-3xl sm:text-4xl font-extrabold mb-6">
        Tired of Chasing Cold Leads That Go Nowhere?
      </h2>
      <p class="text-lg sm:text-xl font-medium">
        If you're relying on referrals, old contacts, or scattered DMs to find new projects&nbsp;— you're leaving deals on the table.
        Today’s developers and architects are online… but most elevator companies aren’t showing up where it counts.
      </p>
      <!-- Illustration placeholder -->
      <div class="mt-10">
        <img src="<?php echo esc_url( $image_base . 'fraustrated-rep.webp' ); ?>"
             alt="Frustrated sales rep buried in paperwork" 
             class="mx-auto rounded shadow-md w-full max-w-xl" />
      </div>
    </div>
  </section>

  <!-- WHAT WE DO (FEATURES) SECTION -->
  <section class="bg-white py-16 px-4">
    <div class="max-w-4xl mx-auto text-center">
      <h2 class="text-3xl sm:text-4xl font-extrabold mb-8">
        We Build You a Smart Lead System That Works While You Sleep
      </h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
        <!-- Feature Card 1 -->
        <div class="bg-gray-50 border border-gray-200 rounded-lg p-6 hover:shadow-lg transition">
          <img src="<?php echo esc_url( $image_base . 'blueprint.webp' ); ?>" alt="Targeted AI Ads Icon" class="mx-auto mb-4" />
          <h3 class="text-xl font-bold uppercase mb-2">🎯 Targeted AI Ads</h3>
          <p>We run targeted ads that speak directly to your ideal clients&nbsp;— developers, architects, facility managers.</p>
        </div>
        <!-- Feature Card 2 -->
        <div class="bg-gray-50 border border-gray-200 rounded-lg p-6 hover:shadow-lg transition">
          <img src="<?php echo esc_url( $image_base . 'chatbot.webp' ); ?>" alt="Automated Pre-Qualification Icon" class="mx-auto mb-4" />
          <h3 class="text-xl font-bold uppercase mb-2">🤖 Automated Pre-Qualification</h3>
          <p>Leads land in a chatbot or WhatsApp flow that <strong>asks qualifying questions automatically</strong> (budget, timeline, project type).</p>
        </div>
        <!-- Feature Card 3 -->
        <div class="bg-gray-50 border border-gray-200 rounded-lg p-6 hover:shadow-lg transition">
          <img src="<?php echo esc_url( $image_base . 'clock-chat.webp' ); ?>" alt="24/7 Follow-Up Icon" class="mx-auto mb-4" />
          <h3 class="text-xl font-bold uppercase mb-2">⏰ 24/7 Follow-Up</h3>
          <p>If someone doesn’t answer immediately, our AI-drip continues nurturing them until they’re ready to speak.</p>
        </div>
        <!-- Feature Card 4 -->
        <div class="bg-gray-50 border border-gray-200 rounded-lg p-6 hover:shadow-lg transition">
          <img src="<?php echo esc_url( $image_base . 'checklist-naira.webp' ); ?>" alt="Sales-Ready Leads Icon" class="mx-auto mb-4" />
          <h3 class="text-xl font-bold uppercase mb-2">📈 Sales-Ready Leads</h3>
          <p>You get a daily digest of <strong>5–15 leads</strong> (depending on your budget), each tagged with budget range, project location, and timeline.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- WHO THIS IS FOR SECTION -->
  <section class="bg-gray-50 py-16 px-4">
    <div class="max-w-3xl mx-auto text-center">
      <h2 class="text-3xl sm:text-4xl font-extrabold uppercase mb-6">Who This Is For</h2>
      <ul class="inline-block text-left">
        <li class="mb-4 pl-6 relative">
          <span class="absolute left-0 top-2 h-2 w-2 bg-green-400 rounded-sm"></span>
          You install elevators, escalators, or smart building systems
        </li>
        <li class="mb-4 pl-6 relative">
          <span class="absolute left-0 top-2 h-2 w-2 bg-green-400 rounded-sm"></span>
          You want <strong>predictable leads</strong>, not guesswork
        </li>
        <li class="mb-4 pl-6 relative">
          <span class="absolute left-0 top-2 h-2 w-2 bg-green-400 rounded-sm"></span>
          Your sales team is wasting time chasing unqualified inquiries
        </li>
        <li class="mb-4 pl-6 relative">
          <span class="absolute left-0 top-2 h-2 w-2 bg-green-400 rounded-sm"></span>
          You want to grow without hiring a big marketing team
        </li>
      </ul>
    </div>
  </section>

  <!-- WHY IT WORKS SECTION -->
  <section class="bg-white py-16 px-4">
    <div class="max-w-4xl mx-auto text-center">
      <h2 class="text-3xl sm:text-4xl font-extrabold uppercase mb-6">What Makes This Different?</h2>
      <p class="text-lg font-medium mb-8">
        Unlike agencies that just “run ads,” we use AI + automation to:
      </p>
      <ul class="max-w-xl mx-auto text-left grid grid-cols-1 sm:grid-cols-2 gap-4">
        <li class="pl-6 relative">
          <span class="absolute left-0 top-2 h-2 w-2 bg-yellow-300 rounded-sm"></span>
          Pre-screen leads before you speak with them
        </li>
        <li class="pl-6 relative">
          <span class="absolute left-0 top-2 h-2 w-2 bg-yellow-300 rounded-sm"></span>
          Learn from every response and improve targeting weekly
        </li>
        <li class="pl-6 relative">
          <span class="absolute left-0 top-2 h-2 w-2 bg-yellow-300 rounded-sm"></span>
          Run 24/7 follow-up sequences that convert slow leads over time
        </li>
        <li class="pl-6 relative">
          <span class="absolute left-0 top-2 h-2 w-2 bg-yellow-300 rounded-sm"></span>
          Ensure you only talk to serious, budget-ready prospects
        </li>
      </ul>
      <!-- Supporting illustration placeholder -->
      <div class="mt-10">
        <img src="<?php echo esc_url( $image_base . 'ai-funnel.webp' ); ?>"
             alt="AI funnel illustration" 
             class="mx-auto rounded shadow-md w-full max-w-2xl" />
      </div>
    </div>
  </section>

  <!-- SOCIAL PROOF SECTION -->
  <section class="bg-gray-50 py-16 px-4">
    <div class="max-w-3xl mx-auto text-center">
      <h2 class="text-3xl sm:text-4xl font-extrabold uppercase mb-8">What Our Clients Are Saying</h2>
      <div class="bg-white border border-gray-200 rounded-lg p-8 shadow-md">
        <p class="text-lg italic">
          “We never got this many quote requests before — and they’re from real developers. This changed the game. Our pipeline value exploded within weeks.”
        </p>
        <p class="mt-4 font-bold">– Elevator Business Owner, Lagos</p>
        <!-- Client logo placeholder -->
        <div class="mt-6">
          <img src="<?php echo esc_url( $image_base . 'business-owner.webp' ); ?>"
               alt="Client Logo" 
               class="mx-auto" />
        </div>
      </div>
    </div>
  </section>

  <!-- CTA REPEAT SECTION -->
  <section class="bg-blue-700 py-16 px-4">
    <div class="max-w-3xl mx-auto text-center text-white">
      <h2 class="text-3xl sm:text-4xl font-extrabold uppercase mb-6">
        🚀 Ready to Get 5–15 Qualified Leads Every Month?
      </h2>
      <a href="https://wa.me/234YOURNUMBERHERE?text=Hi%20I%20want%20to%20see%20a%20demo%20of%20your%20AI-powered%20lead-gen%20service." 
         class="inline-block bg-white text-blue-700 font-bold uppercase py-4 px-8 rounded-lg hover:bg-gray-100 transition">
        🔎 Book Free Demo on WhatsApp
      </a>
    </div>
  </section>

  <!-- FAQ SECTION -->
  <section class="bg-white py-16 px-4">
    <div class="max-w-4xl mx-auto">
      <h2 class="text-3xl sm:text-4xl font-extrabold uppercase text-center mb-8">Frequently Asked Questions</h2>
      <div class="space-y-8">
        <div class="ai-faq-item">
          <h4 class="text-2xl font-bold uppercase mb-2">Q: How soon can I start getting leads?</h4>
          <p class="pl-4">A: Most clients begin receiving leads within <strong>3–7 days</strong> of setup.</p>
        </div>
        <div class="ai-faq-item">
          <h4 class="text-2xl font-bold uppercase mb-2">Q: Is this a one-time setup or monthly service?</h4>
          <p class="pl-4">A: We offer both — <strong>setup only</strong>, or <strong>monthly management and optimization</strong>.</p>
        </div>
        <div class="ai-faq-item">
          <h4 class="text-2xl font-bold uppercase mb-2">Q: Can I choose the kind of projects I want?</h4>
          <p class="pl-4">A: Yes. We tailor your targeting based on <strong>budget</strong>, <strong>location</strong>, or <strong>project size</strong>.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="bg-gray-800 py-8 px-4">
    <div class="max-w-3xl mx-auto text-center text-gray-300 text-sm">
      &copy; 2025 AI Lead Gen Solutions. All rights reserved.
    </div>
  </footer>

</body>
</html>


<?php
//get_footer();
?>
