@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-white">
  <header class="relative z-10">
    <div class="bg-gray-50">
      <nav class="relative max-w-7xl mx-auto flex items-center justify-between pt-8 px-6 xl:px-8" aria-label="Global">
        <div class="flex items-center justify-between w-full lg:w-auto">
          <a href="/">
            <span class="sr-only">Workflow</span>
            <img class="h-8 w-auto sm:h-10" src="/images/WCTT-Site-Image-NavLogo.png" alt="">
          </a>
          <div class="-mr-2 flex items-center lg:hidden">
            <button type="button" class="bg-gray-50 rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:bg-gray-100 focus:outline-none focus:ring-2 focus-ring-inset focus:ring-grape-500" aria-expanded="false">
              <span class="sr-only">Open main menu</span>
              <!-- Heroicon name: outline/menu -->
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
            </button>
          </div>
          <div class="hidden space-x-10 lg:flex lg:ml-10">
              <a href="/contact" class="font-medium text-gray-900 hover:text-gray-900">Contact Us</a>
        </div>
        </div>
       
        <div class="hidden lg:flex lg:items-center lg:space-x-6">
         
        </div>
      </nav>
    </div>

    <!--
      Mobile menu, show/hide based on menu open state.

      Entering: "duration-150 ease-out"
        From: "opacity-0 scale-95"
        To: "opacity-100 scale-100"
      Leaving: "duration-100 ease-in"
        From: "opacity-100 scale-100"
        To: "opacity-0 scale-95"
    -->
    <div class="absolute top-0 inset-x-0 p-2 transition transform origin-top lg:hidden">
      <div class="rounded-lg shadow-lg bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
        <div class="px-5 pt-4 flex items-center justify-between">
          <div>
            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=purple&shade=600" alt="">
          </div>
          <div class="-mr-2">
            <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-grape-500">
              <span class="sr-only">Close menu</span>
              <!-- Heroicon name: outline/x -->
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
        </div>
        <div class="pt-5 pb-6">
          <div class="px-2 space-y-1">
          

<a href="/contact" class="font-medium text-gray-900 hover:text-gray-900">Contact Us</a>
          </div>
         
        </div>
      </div>
    </div>
  </header>



  <div class="py-16 xl:py-36 px-4 sm:px-6 lg:px-8 bg-white overflow-hidden">
  <div class="max-w-max lg:max-w-7xl mx-auto">
    <div class="relative z-10 mb-8 md:mb-2 md:px-6">
      <div class="text-base max-w-prose lg:max-w-none">
        <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">Terms & Conditions</p>
            <h2 class="leading-6 text-chelsea-500 font-semibold tracking-wide uppercase">Welcome to the Terms and Conditions for Westcott Dyson PTE LTD’s website. </h2>
      </div>
    </div>
    <div class="relative">
      <svg class="hidden md:block absolute top-0 right-0 -mt-20 -mr-20" width="404" height="384" fill="none" viewBox="0 0 404 384" aria-hidden="true">
        <defs>
          <pattern id="95e8f2de-6d30-4b7e-8159-f791729db21b" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
          </pattern>
        </defs>
        <rect width="404" height="384" fill="url(#95e8f2de-6d30-4b7e-8159-f791729db21b)" />
      </svg>
      <svg class="hidden md:block absolute bottom-0 left-0 -mb-20 -ml-20" width="404" height="384" fill="none" viewBox="0 0 404 384" aria-hidden="true">
        <defs>
          <pattern id="7a00fe67-0343-4a3c-8e81-c145097a3ce0" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
          </pattern>
        </defs>
        <rect width="404" height="384" fill="url(#7a00fe67-0343-4a3c-8e81-c145097a3ce0)" />
      </svg>
      <div class="relative md:bg-white md:p-6">
        <div class="lg:grid lg:grid-cols-1 lg:gap-6">
          <div class="prose prose-indigo prose-lg text-deep-700 font-copy text-justify lg:max-w-none">
            <p>Westcott Dyson PTE LTD is an investment and wealth management company helping people invest their finances. This is an agreement (“Agreement”) between Westcott Dyson PTE LTD, the owner and operator of http://www.westcottdyson.com (the “Site” and any “Services”) and you (“you” or “your” or “user(s)”), a user of the Site and Service. This Agreement is legally binding and governs your use of our site and service. Throughout this Agreement, the words “Westcott Dyson PTE LTD,” “us,” “we,” and “our,” refer to, Westcott Dyson PTE LTD, and our website, http://www.westcottdyson.com, and any of our Services provided through our website.</p>
            <p>By using or accessing our Site and using any of our Services, you acknowledge and agree to these terms and agree to be bound by this Agreement and the Privacy Policy. We may amend our Terms of Service or Privacy Policy from time to time, and we will notify you of these changes to our policy. Your continued use constitutes acceptance of these changes.</p>
            <p>By submitting information to us, you agree that you are a sophisticated self-certified investor or a certified sophisticated investor, and you are also a certified high net worth individual. If you do not agree to the Terms and Conditions or the Privacy Policy, please stop using our Site and Service immediately.</p>
            <p>Users of our Site and Service must be above the age of 18.</p>
            <p>Description of Service <br>Westcott Dyson PTE LTD is a financial advisory service that caters to the global expatriate community. Westcott Dyson PTE LTD offers wealth management, offshore investment, and retirement planning along with other financial investment vehicles and opportunities. We lead the investment industry in knowledge and high-level performance. We use our experience and know-how to bring you the best in international investment.
</p>
            <p>Contact Information<br>To contact us, we ask you to submit your name, phone number, email address, and other financial information. Additionally, we request that you leave a short message describing your financial goals and needs.</p>
            <p>Confidentiality<br>During your use of our service, you will be exposed to Confidential Information. “Confidential Information” means any information or communications, whether written, oral, graphic, or electronic, provided to you by us, including but not limited to investment plans, strategies, agreements with third parties, and all other investment-related information.</p>
            <p>To protect our investment knowledge and financial techniques, none of our Confidential Information must be disclosed. Therefore, by submitting information to us and using our Service, you agree that you will not disclose any Confidential Information to any person or entity except as we may approve in writing. Additionally, you agree to use your best efforts in safeguarding our Confidential Information. In the event of any violation of this provision of the Agreement, you agree that a breach will cause irreparable damage to Westcott Dyson PTE LTD. Therefore, if you breach these provisions, we will be entitled to injunctive relief without being required to post any bond, thus restraining you from violating or continuing to violate this Agreement.</p>

          <!-- </div>
          <div class="mt-6 prose prose-indigo prose-lg text-deep-700 lg:mt-0"> -->
          <p>Intellectual Property Rights<br>The design of the site, along with Westcott Dyson PTE LTD’s created text, scripts, graphics, interactive features, and the trademarks, service marks, and logos contained therein (“Marks”), are owned by or licensed to Westcott Dyson PTE LTD, subject to copyright and other intellectual property rights under Singapore and foreign laws and international conventions. </p>
            <p>You agree to not engage in the use, copying, or distribution of anything contained within the Site or Service unless we have given you express written permission.</p>
            <p>Certified High Net Worth Individual<br>By submitting any information to us, you declare and agree that you are a certified high net worth individual for the Financial Services and Markets Act 2000 (Financial Promotion) Order 2005. You agree that this means:</p>
          <ul class = "text-deep-700 list-disc list-inside">
              <li>You can receive financial promotions that may not have been approved by a person authorized by the Financial Conduct Authority;</li>
              <li>the content of such financial promotions may not conform to rules issued by the Financial Conduct Authority;</li>
              <li>by agreeing to this Agreement, you may lose significant rights;</li>
              <li>You may have no right to complain to either of the following:</li>
              <li>the Financial Conduct Authority; or</li>
              <li>the Financial Ombudsman Scheme;</li>
              <li>You have no right to seek compensation from the Financial Services Compensation Scheme.</li>
              <li>You are a certified high net worth individual because at least one of the following applies—</li>
              <li>You had, during the financial year immediately preceding the date you accept our Agreement, an annual income to the value of £100,000 or more;</li>
              <li>You held, throughout the financial year immediately preceding the date you accept our Agreement, net assets to the value of £250,000 or more. Net assets for these purposes do not include—</li>
              <li>the property which is my primary residence or any loan secured on that residence;</li>
              <li>any rights of mine under a qualifying contract of insurance within the meaning of the Financial Services and Markets Act 2000 (Regulated Activities) Order 2001; or</li>
              <li>Any benefits (in the form of pensions or otherwise) are payable on the termination of your service or your death or retirement and to which you (or your dependents) are, or maybe, entitled.</li>
              <li>You accept that you can lose your property and other assets from making investment decisions based on financial promotions. You are aware that it is open to you to seek advice from someone who specializes in advising on investments.</li>
            </ul>

            <p>Self-Certified Sophisticated Investor<br>By submitting any information to us, you declare and agree that you are either a sophisticated self-certified investor or a certified sophisticated investor (see section 8) for the purposes of the Financial Services and Markets Act 2000 (Financial Promotion) Order 2005. You understand that this means:</p>
            <ul class = "text-deep-700 list-disc list-inside">
              <li>You can receive financial promotions that may not have been approved by a person authorized by the Financial Conduct Authority;</li>
              <li>the content of such financial promotions may not conform to rules issued by the Financial Conduct Authority;</li>
              <li>by agreeing to this Agreement, you may lose significant rights;</li>
              <li>you may have no right to complain to either of the following:</li>
              <li>the Financial Conduct Authority; or</li>
              <li>the Financial Ombudsman Scheme;</li>
              <li>You may have no right to seek compensation from the Financial Services Compensation Scheme.</li>
              <li>You are a sophisticated self-certified investor because at least one of the following applies—</li>
              <li>You are a member of a network or syndicate of business angels and have been so for at least the last six months before the date below;</li>
              <li>You have made more than one investment in an unlisted company in the two years before the date below;</li>
              <li>You are working, or have worked in the two years before the date which you agree to this Agreement, in a professional capacity in the private equity sector, or the provision of finance for small and medium enterprises;</li>
              <li>You are currently, or have been in the two years before the date below, a company director with an annual turnover of at least £1 million.</li>
              <li>You accept that you can lose your property and other assets from making investment decisions based on financial promotions. You are aware that it is open to you to seek advice from someone who specializes in advising on investments.</li>
            </ul>
            <p>Certified Sophisticated Investor<br>By submitting any information to us, you declare and agree that you are either a sophisticated self-certified investor (see section 7) or a certified sophisticated investor for the Financial Services and Markets Act 2000 (Financial Promotion) Order 2005.</p>
            <p>To this end, after accepting this Agreement, you will send a certificate in writing or other legible form signed by an authorized person within the meaning of the Act to the effect that you are sufficiently knowledgeable to understand the risks associated with investments in shares or stock in the share capital of anybody corporate wherever incorporated or any other asset as described in the above Order;</p>
            <p>By agreeing to this Agreement, you fully understand and agree to the following statement: “I make this statement so that I can receive promotions which are exempt from the restrictions on financial promotion in the Financial Services and Markets Act 2000. The exemption relates to certified sophisticated investors, and I declare that I qualify as such in relation to investments of the following kind [listed below]. I accept that the contents of promotions and other material that I receive may not have been approved by an authorized person and that their content may not therefore be subject to controls that would apply if the promotion were made or approved by an authorized person. I am aware that it is open to me to seek advice from someone who specializes in advising on this kind of investment”.</p>
            <p>Investment kinds: shares of stock in the share capital of anybody corporate wherever also incorporated any unincorporated body constituted under the law of a country or territory outside Singapore.</p>
            <p>Non-Disparagement<br>Our reputation is very important to us. By submitting any information to us or using any of our Services, you agree that you will not disparage Westcott Dyson PTE LTD, its services, officers, agents or employees in a harmful manner that will either hurt our reputation or our business reputation. This non-disparagement clause becomes effective immediately after you agree to our Terms of Service. </p>
            <p>The word “disparage” shall mean making comments to a person not a party to this Agreement, which would be actionable under legal principles of defamation or which materially cause damage to the reputation of a party to this Agreement. In the event of any violation of this provision of the Agreement, you agree that a breach will cause irreparable damage to Westcott Dyson PTE LTD. Therefore, if you breach these provisions, we will be entitled to injunctive relief without being required to post any bond, thus restraining you from violating or continuing to violate this Agreement.</p>
            <p>Limitations on Liability<br>In no event shall Westcott Dyson PTE LTD, its officers, directors, employees, or agents, be liable to you for any direct, indirect, incidental, special, punitive, or consequential damages whatsoever resulting from any (I) errors, mistakes, or inaccuracies of our site or service, (II) personal injury, losses or property damage, of any nature whatsoever, resulting from your access to and use of our financial services and products, (III) any unauthorized access to or use of our secure servers and/or any and all personal information and/or financial information stored therein, (IV) any interruption or cessation of transmission to or from our services, (V) any bugs, viruses, trojan horses, or the like, which may be transmitted to or through our services by any third party, and/or (VI) any errors or omissions in any content or for any loss or damage of any kind incurred as a result of your use of our products made available via the services, whether based on warranty, contract, tort, or any other legal theory, and whether or not the company is advised of the possibility of such damages. The foregoing limitation of liability shall apply to the fullest extent permitted by law in the applicable jurisdiction. In any problem with this site or service, you agree that your sole remedy is to cease using this website. In the event of any problems with our service, you agree that our liability is limited to the lowest legally allowed amount if any. Westcott Dyson PTE LTD is not liable to you or third parties for any damage, harm, injury, or claim that arises from your use of any products purchased from our site.</p>
            <p>Representations and Warranties<br>We make no representations or warranties as to our service's merchantability or fitness for any particular purpose. We expressly disclaim all express or implied warranties. We offer financial services; however, we do not and will not guarantee your investments' profitability. You agree that you are releasing us from any liability that we may otherwise have to you about or arising from this Agreement or our services, for reasons including, but not limited to, failure of our service, negligence, or any other tort. To the extent that applicable law restricts this release of liability, you agree that we are only liable to you for the minimum amount of damages that the law restricts our liability to if such a minimum exists.</p>
            <p>We are not liable for any failure of the services of our company or a third party, including any failures or disruptions, untimely delivery, scheduled or unscheduled, intentional or unintentional, on our website which prevents access to our website temporarily or permanently.
            <p>For Jurisdictions that do not allow us to limit our liability: Notwithstanding any provision of these Terms, if your jurisdiction has provisions specific to waiver or liability that conflict with the above, our liability is limited to the smallest extent possible by law. Specifically, in those jurisdictions not allowed, we do not disclaim liability for: (a) death or personal injury caused by its negligence or that of any of its officers, employees or agents; or (b) fraudulent misrepresentation; or (c) any liability which it is not lawful to exclude either now or in the future.</p>
            <p>If you are a resident of a jurisdiction that requires a specific statement regarding release then the following applies “a general release does not extend to claims which the creditor does not know or suspect to exist in his or her favor at the time of executing the release, which if known by him or her must have materially affected his or her settlement with the debtor.” You hereby waive this section of the California civil code. You hereby waive any similar provision in law, regulation, or code that has the same intent or effect.</p>
            <p>Indemnity<br>You agree to indemnify and hold us harmless for any claims by you or any third party which may arise from or relate to this Agreement or the provision of any of our Services to you, including any damages caused by your use of our Site or Service, or by your breach of this Agreement. You also agree that you must defend us against such claims, and we may require you to pay for an attorney(s) of our choice in such cases. You agree that this indemnity extends to requiring you to pay for our reasonable attorneys’ fees, court costs, and disbursements. In the event of a claim such as one described in this paragraph, we may elect to settle with the party/parties making a claim, and you shall be liable for the damages as though we had proceeded with a trial.</p>
            <p>Third-Party Links<br>We may link to third-party websites from our website. We have no control over and are not responsible for these third-party websites or their use of your personal information. We do not endorse, recommend or vouch for the security of such websites. We recommend reviewing their terms of service and privacy policies before accessing and using the third-party site. Additionally, users may be able to post third-party links through content submitted to our Site. We are not responsible for such links and do not monitor the posting of such links. Please exercise caution when clicking on such links as they may cause harm to your computer.</p>
            <p>User Age<br>Westcott Dyson PTE LTD and its Services may only be used by persons 18 years and older. If you are under the age of 18, please do not submit any information to us, and please stop using our Site and Service immediately.</p>
            <p>Choice of Law<br>This Agreement shall be governed by the laws in force in Singapore. The offer and acceptance of this contract are deemed to have occurred in Indonesia.</p>
            <p>Forum of Dispute<br>You agree that any dispute arising from or relating to this Agreement will be heard solely by a court of competent jurisdiction in or nearest to Singapore. If you bring a dispute in a manner other than in accordance with this section, you agree that we may move to have it dismissed and that you will be responsible for our reasonable attorneys’ fees, court costs, and disbursements in doing so. You agree that the unsuccessful party in any dispute arising from or relating to this Agreement will be responsible for the reimbursement of the successful party’s reasonable attorneys’ fees, court costs, and disbursements.</p>
            <p>Force Majeure<br>You agree that we are not responsible to you for anything that we may otherwise be responsible for, if it is the result of events beyond our control, including, but not limited to, acts of God, war, insurrection, riots, terrorism, crime, labor shortages (including lawful and unlawful strikes), embargoes, postal disruption, communication disruption, failure or shortage of infrastructure, shortage of materials, or any other event beyond our control.</p>
            <p>Severability<br>In the event that a provision of this Agreement is found to be unlawful, conflicting with another provision of the Agreement, or otherwise unenforceable, the Agreement will remain in force as though it had been entered into without that unenforceable provision being included in it. If two or more provisions of this Agreement are deemed to conflict with each other’s operation, Westcott Dyson PTE LTD shall have the sole right to elect which provision remains in force.</p>
            <p>Non-Waiver<br>We reserve all rights permitted to us under this Agreement and under the provisions of any applicable law. Our non-enforcement of any particular provision or provisions of this Agreement or any applicable law should not be construed as our waiver of the right to enforce that same provision under the same or different circumstances at any time in the future.</p>
            <p>Termination and Cancellation<br>We may terminate or suspend service or any other provision of services to you at our discretion without explanation and notice. However, we will strive to provide a timely explanation in most cases. If you wish to terminate this Agreement, you are solely responsible for properly notifying us. All provisions of this Agreement which by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity and limitations of liability.</p>
            <p>Assignment<br>You may not assign your rights and/or obligations under this Agreement to any other party without our prior written consent. We may assign our rights and/or obligations under this Agreement to any other party at our discretion.</p>
            <p>Amendments<br>We may amend this Agreement from time to time. When we amend this Agreement, we will update this page and indicate the date that it was last modified. You may refuse to agree to the amendments, but you must immediately cease using our website and our Service if you do. You must visit this page each time you come to our website and read and agree to it if the last modified date is more recent than the last time you agreed to the Agreement.</p>


            
          </div>
        </div>
     
      </div>
    </div>
  </div>
</div>
@endsection