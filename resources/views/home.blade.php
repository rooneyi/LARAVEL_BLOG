@extends('base')
@section('title','Home')
@section('content')
    <div class="relative flex size-full min-h-screen flex-col bg-white group/design-root overflow-x-hidden" style='font-family: Newsreader, "Noto Sans", sans-serif;'>
      <div class="layout-container flex h-full grow flex-col">
        @include('partials.navbar')
        <div class="px-40 flex flex-1 justify-center py-5">
          <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
            <div class="flex flex-wrap justify-between gap-3 p-4"><p class="text-[#111418] tracking-light text-[32px] font-bold leading-tight min-w-72">Latest Posts</p></div>
            <div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-4">
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB4lnuaxysiyQEUXhqDFMD0ltSaShx3VoXrWQ-rhfy84CqOvZ_jh0TDfL7VTMAZ1CforCLfoQXEN92sxyHwQGfEX_b0VgAQ0sdaVG5zSS_IFJ3Mpgd5pg5F0ip7K_RsIgXd2Ae0ttlluzcT32cm30mFTs0eo1HJPdeW0rLe0_5_RG8OMBpGLksKHFHkk7-pkHdPAY0MIswiDmjtdiBTwRLnQYO2hHJD-FlJBRzKYuM8v-BGkyIG74RdKRCMRe2NfmDPknb5PC19Vpc");'
                ></div>
                <div>
                  <p class="text-[#111418] text-base font-medium leading-normal">The Art of Mindful Living</p>
                  <p class="text-[#60758a] text-sm font-normal leading-normal">Discover how to cultivate mindfulness in your daily life for enhanced well-being.</p>
                </div>
              </div>
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBbo_MyrB81-2hl8IQIMiqW80PkZ5t7hoedzqpcMd17wzdtH0BgirbY9u7r11etLqt0QYcD_isEYgyvbolazc291Tyl5wfLkOsIXg7dqKEpXYmR_7BWbXMq3CxMkbU6DmDonEvnSrz1oPpY_aAGoKODNsMybePaaYaHAasmJ7JFwDmkDzHWQkDzJXbGmXdszOU1DxQABxN84b-x-N9C7DOHgJ5NyNGuGGwAcHV6mUqZVZ5w_cAQ4YharGwu1mDsWxvDWPa36tpSv7Y");'
                ></div>
                <div>
                  <p class="text-[#111418] text-base font-medium leading-normal">Exploring the Hidden Gems of the Pacific Northwest</p>
                  <p class="text-[#60758a] text-sm font-normal leading-normal">Uncover the breathtaking landscapes and unique experiences of the Pacific Northwest.</p>
                </div>
              </div>
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCTneYuOT2zU3tbZz4bvMnMpfCVgQR0DbyhOngIeM36Qy0v0PE5zpRQRDwjkoHNRsidKQt51tGrS5P0xyj-ccVYgmdkY2UtA0VYMmb5nMn8eIeXzROEsmzyZ-L1egxTzvSU_92fvSMpi0P0lGBkjTemeBGMq75ySNT-eduBBE9BoPVvcdo4KMwJfRwxnUnAypqlAHJ0I3X-FTm-NxgcxV1kE7nHGU2F2QbHKwYLpbJLdVpCLd6Oow2U4e6dQ7qp1WyvL3m4gQTOD68");'
                ></div>
                <div>
                  <p class="text-[#111418] text-base font-medium leading-normal">Mastering the Perfect Cup of Coffee</p>
                  <p class="text-[#60758a] text-sm font-normal leading-normal">Learn the secrets to brewing a delicious and aromatic cup of coffee at home.</p>
                </div>
              </div>
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDbsd40aLQB71n0YxmeHiqcc1GmpfIdD3MtJg0Vi1kyAK2bYGVi4dNIY1X5AXRy003g1iPZOGuh1pArnyB5zmQvvWteb29M90w3nMbfVu3sH3xftIn8Any_HGzWqGZQBdyk0JwSbUBA9Rdr4MiwIsYURpdv2Cm4odshseQh8AsWQGt_mkD_mWdIIMxyDhOFliOKD-gEXNr-mF9C6bm_qqPUbtXUjdLyyUMKdJ2PBNN4UZ8GMlviz9hnqTqu5DCmSoMA1tKQQDOFhj0");'
                ></div>
                <div>
                  <p class="text-[#111418] text-base font-medium leading-normal">A Guide to Sustainable Fashion</p>
                  <p class="text-[#60758a] text-sm font-normal leading-normal">Embrace eco-friendly fashion choices with our comprehensive guide to sustainable clothing.</p>
                </div>
              </div>
              <div class="flex flex-col gap-3 pb-3">
                <div
                  class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDy659yDH-R1JzxYZ6zNNrrHstNcH_87FEhWX-SARoX7lIW44Li21Pwv1Jupca93sZ7rg4BZVFmdg9d4XQfknq3IovDHkS35AwzBdsSxYpYliutZNO8vzkmU7cVEUEm_gzUWu9wqJkaCdkujAlfzXWt30FRgeBqdUlGVmqVDgAWRPm01tuvz1J8BZxo1fwcKRWKEf5cuoeycjjIrYg1x5uZwMm8NYcpZ-7_Z0N2MdhBi-nojvq9c8pcBhoI4LAp82nzPH47d7CCzOI");'
                ></div>
                <div>
                  <p class="text-[#111418] text-base font-medium leading-normal">The Power of Positive Thinking</p>
                  <p class="text-[#60758a] text-sm font-normal leading-normal">Transform your mindset and unlock your potential with the power of positive thinking.</p>
                </div>
              </div>
            </div>
            <h2 class="text-[#111418] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Popular Posts</h2>
            <div class="flex overflow-y-auto [-ms-scrollbar-style:none] [scrollbar-width:none] [&amp;::-webkit-scrollbar]:hidden">
              <div class="flex items-stretch p-4 gap-3">
                <div class="flex h-full flex-1 flex-col gap-4 rounded-lg min-w-60">
                  <div
                    class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl flex flex-col"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAp-gv6vyw84TVdqxksS648lBKLtL8Ns0Gu5b0zipj3AphJQ5Nb5Sel4OYZjEmA6abbhSyJ4GMD3dVskLh3sqkudg3WKMIj9LDqN7Fvaw_aCPuagNkl7Wd1ptkS_2PSfXlTloiQZXPZF7j_kFkdfypuO_21Z24i8IYxbsHk311H1s8K9KSAghkuqwZiH0beA5eJCsbgK5ONNKod1n1uszKFtwmWzUZGknqxMKBtqx4GPgnL9lLzfSLjhD3F9qt7hP0Fgqxn5FIBIdM");'
                  ></div>
                  <div>
                    <p class="text-[#111418] text-base font-medium leading-normal">Top 5 Hiking Trails in the Rockies</p>
                    <p class="text-[#60758a] text-sm font-normal leading-normal">Explore the most scenic and challenging hiking trails in the Rocky Mountains.</p>
                  </div>
                </div>
                <div class="flex h-full flex-1 flex-col gap-4 rounded-lg min-w-60">
                  <div
                    class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl flex flex-col"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAGn9tma72zJat9jau75eOAq7ROpqYeR7h7L27RHPI4qgOMOJz-zxuD3NxZhNQJ9BpDHKK2rxQke8klsQ13DbB8otf6WpkIur3pt20z0EbQqZ6s3Kg6zoDgVTpPBgnX7kSS0hxG4rbERg1GFwZ8yxf3PGPAeT2OJOTeXy8_Cv2VjiNtIgn8b9NCuyXwF_GH6JBXJLMJ8N6lO98p7HzwghxbudVkKWRzLKz2i-IOO8B_02wWkhk8xvnuyGxMrOwBgRk-RlBoMIvwHoQ");'
                  ></div>
                  <div>
                    <p class="text-[#111418] text-base font-medium leading-normal">Urban Photography Tips for Beginners</p>
                    <p class="text-[#60758a] text-sm font-normal leading-normal">Capture the beauty of city life with these essential photography tips.</p>
                  </div>
                </div>
                <div class="flex h-full flex-1 flex-col gap-4 rounded-lg min-w-60">
                  <div
                    class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-xl flex flex-col"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDcMPORGnhrb1m4koENTLrFG1lX25Gh6_4uSIs0rxuEWe305wfoNquXkh6SOq2PLOpoXYpVa4FbHoCCfgMqheXPYC_1Ecve-eYBo6E3Ba9R7H16Mdm5MSiaRrcDw8PPWWU7crNunGOr6yADqAXVGo7SIP-Yg3NW7FM-1Zk9tR59WsygCeBypwDm0V4hOkube5xYhrhRI50qR0MlIBFPL0BgxLmh6mvYsDmKeTrKr1w6N9ZpPA-YzV62DeThQjp5TgRIJ4cI68g6SjM");'
                  ></div>
                  <div>
                    <p class="text-[#111418] text-base font-medium leading-normal">Best Beaches for a Relaxing Getaway</p>
                    <p class="text-[#60758a] text-sm font-normal leading-normal">Discover the most serene and beautiful beaches around the world.</p>
                  </div>
                </div>
              </div>
            </div>
            <h2 class="text-[#111418] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Featured Categories</h2>
            <div class="flex gap-3 p-3 flex-wrap pr-4">
              <div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-full bg-[#f0f2f5] pl-4 pr-4">
                <p class="text-[#111418] text-sm font-medium leading-normal">Travel</p>
              </div>
              <div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-full bg-[#f0f2f5] pl-4 pr-4">
                <p class="text-[#111418] text-sm font-medium leading-normal">Lifestyle</p>
              </div>
              <div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-full bg-[#f0f2f5] pl-4 pr-4">
                <p class="text-[#111418] text-sm font-medium leading-normal">Food</p>
              </div>
              <div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-full bg-[#f0f2f5] pl-4 pr-4">
                <p class="text-[#111418] text-sm font-medium leading-normal">Technology</p>
              </div>
            </div>
            <h2 class="text-[#111418] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Reader Testimonials</h2>
            <div class="flex flex-col gap-8 overflow-x-hidden bg-white p-4">
              <div class="flex flex-col gap-3 bg-white">
                <div class="flex items-center gap-3">
                  <div
                    class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDkiCrlHOETYqLtVdclYAgUEoMapWtU1J94nZFr0kuyghRONPQbkzgzvt7gZqaQnvPbnA5islsq-XOTZYA3pkIeezzzGDREbLujXr3yKSgjV7pGgOND9CIyiTMCdzEvZb0PGMJ3yBVemAA7pQ8snCYnT1q3ypAlxObxB8yvg_wbNw0HmglEuipAj2R3L1hNyjwgmNKxV0fDjhccO_6_KChG3lt8H5zcj_qpF74UcOJUdi-egHnIbzcKclXVGwmmA2N-aitl3q2uw1w");'
                  ></div>
                  <div class="flex-1">
                    <p class="text-[#111418] text-base font-medium leading-normal">Sophia Clark</p>
                    <p class="text-[#60758a] text-sm font-normal leading-normal">2 months ago</p>
                  </div>
                </div>
                <div class="flex gap-0.5">
                  <div class="text-[#111418]" data-icon="Star" data-size="20px" data-weight="fill">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"
                      ></path>
                    </svg>
                  </div>
                  <div class="text-[#111418]" data-icon="Star" data-size="20px" data-weight="fill">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"
                      ></path>
                    </svg>
                  </div>
                  <div class="text-[#111418]" data-icon="Star" data-size="20px" data-weight="fill">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"
                      ></path>
                    </svg>
                  </div>
                  <div class="text-[#111418]" data-icon="Star" data-size="20px" data-weight="fill">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"
                      ></path>
                    </svg>
                  </div>
                  <div class="text-[#111418]" data-icon="Star" data-size="20px" data-weight="fill">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"
                      ></path>
                    </svg>
                  </div>
                </div>
                <p class="text-[#111418] text-base font-normal leading-normal">
                  I absolutely love the content on this blog! The articles are well-written and insightful, and I always find something new to learn.
                </p>
              </div>
              <div class="flex flex-col gap-3 bg-white">
                <div class="flex items-center gap-3">
                  <div
                    class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBMO-saoYYUkjOmoGvhZUbL8HvI7ywS1AsvgQDJnZ150st5R50tJcWw-sH2LmfTC5sCacFBPgj88C6F4-ws39HA762huN1p87XcircDKAm8gZJseYPD1aWk14ARiaouDIBHDRf_qxjSHRD8Mp0zqSapKRVXBy1AuXQp_0Bdth2s6TTB_U5A-ANLEGr3OmYGB5-MSD1deqmGTdbzcKYFM_cFzZXCf_J2bRyCnr1K2IhwFpPnBseQkSqScWMFVMcI3mOLtZQe-gSeSi8");'
                  ></div>
                  <div class="flex-1">
                    <p class="text-[#111418] text-base font-medium leading-normal">Ethan Bennett</p>
                    <p class="text-[#60758a] text-sm font-normal leading-normal">3 months ago</p>
                  </div>
                </div>
                <div class="flex gap-0.5">
                  <div class="text-[#111418]" data-icon="Star" data-size="20px" data-weight="fill">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"
                      ></path>
                    </svg>
                  </div>
                  <div class="text-[#111418]" data-icon="Star" data-size="20px" data-weight="fill">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"
                      ></path>
                    </svg>
                  </div>
                  <div class="text-[#111418]" data-icon="Star" data-size="20px" data-weight="fill">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"
                      ></path>
                    </svg>
                  </div>
                  <div class="text-[#111418]" data-icon="Star" data-size="20px" data-weight="fill">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"
                      ></path>
                    </svg>
                  </div>
                  <div class="text-[#bac4cf]" data-icon="Star" data-size="20px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M239.2,97.29a16,16,0,0,0-13.81-11L166,81.17,142.72,25.81h0a15.95,15.95,0,0,0-29.44,0L90.07,81.17,30.61,86.32a16,16,0,0,0-9.11,28.06L66.61,153.8,53.09,212.34a16,16,0,0,0,23.84,17.34l51-31,51.11,31a16,16,0,0,0,23.84-17.34l-13.51-58.6,45.1-39.36A16,16,0,0,0,239.2,97.29Zm-15.22,5-45.1,39.36a16,16,0,0,0-5.08,15.71L187.35,216v0l-51.07-31a15.9,15.9,0,0,0-16.54,0l-51,31h0L82.2,157.4a16,16,0,0,0-5.08-15.71L32,102.35a.37.37,0,0,1,0-.09l59.44-5.14a16,16,0,0,0,13.35-9.75L128,32.08l23.2,55.29a16,16,0,0,0,13.35,9.75L224,102.26S224,102.32,224,102.33Z"
                      ></path>
                    </svg>
                  </div>
                </div>
                <p class="text-[#111418] text-base font-normal leading-normal">
                  This blog has become my go-to source for travel inspiration. The photography is stunning, and the tips are incredibly helpful.
                </p>
              </div>
              <div class="flex flex-col gap-3 bg-white">
                <div class="flex items-center gap-3">
                  <div
                    class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBW4qz_dbGU2bIKDJnZ49cmDwmCkXVgEHIUq3MrAWTZ8qfjNZJazYAvna10eC5UHMN2J2aErH57MIWrv8BFsaE06bT4x1wyapF6ZpRdnQFUCC8WSiZUipmPp63adRUwD86Yne43I9vx6W-dcd4vX6WSWULQK1Pw0u7a7kED7nT6Fk7z-4ZwAT67VLc7lLUrFDnFV6TnjLtqrUioazdjFJWq_XicexrS_z1eg3phKhZnYF2rS2joTNdEdQs8SVIojC7cEkxPxNJl9_k");'
                  ></div>
                  <div class="flex-1">
                    <p class="text-[#111418] text-base font-medium leading-normal">Olivia Carter</p>
                    <p class="text-[#60758a] text-sm font-normal leading-normal">4 months ago</p>
                  </div>
                </div>
                <div class="flex gap-0.5">
                  <div class="text-[#111418]" data-icon="Star" data-size="20px" data-weight="fill">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"
                      ></path>
                    </svg>
                  </div>
                  <div class="text-[#111418]" data-icon="Star" data-size="20px" data-weight="fill">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"
                      ></path>
                    </svg>
                  </div>
                  <div class="text-[#111418]" data-icon="Star" data-size="20px" data-weight="fill">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"
                      ></path>
                    </svg>
                  </div>
                  <div class="text-[#111418]" data-icon="Star" data-size="20px" data-weight="fill">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"
                      ></path>
                    </svg>
                  </div>
                  <div class="text-[#111418]" data-icon="Star" data-size="20px" data-weight="fill">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M234.5,114.38l-45.1,39.36,13.51,58.6a16,16,0,0,1-23.84,17.34l-51.11-31-51,31a16,16,0,0,1-23.84-17.34L66.61,153.8,21.5,114.38a16,16,0,0,1,9.11-28.06l59.46-5.15,23.21-55.36a15.95,15.95,0,0,1,29.44,0h0L166,81.17l59.44,5.15a16,16,0,0,1,9.11,28.06Z"
                      ></path>
                    </svg>
                  </div>
                </div>
                <p class="text-[#111418] text-base font-normal leading-normal">
                  The lifestyle section is fantastic! It covers a wide range of topics, and I appreciate the practical advice and positive tone.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection