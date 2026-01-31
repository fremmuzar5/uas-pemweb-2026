<!--====== ABOUT SECTION START ======-->
@php
    use App\Models\About;

    // Ambil data About utama
    $about = About::where('section_key', 'about_main')->first();

    // Metadata tabs (tentang, visi, latar)
    $metadata = $about?->metadata ?? [];
@endphp

@if($about)
<section id="about" class="about-area about-five pt-100 pb-100">
    <div class="container">
        <div class="row align-items-center">

            <!-- IMAGE -->
            <div class="col-lg-6 col-12">
                <div class="about-image-five position-relative">
                    <svg class="shape" width="106" height="134" viewBox="0 0 106 134" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        @for ($i = 0; $i < 60; $i++)
                            <circle
                                cx="{{ ($i % 6) * 14 + 2 }}"
                                cy="{{ floor($i / 6) * 14 + 2 }}"
                                r="1.6"
                                fill="#DADADA"
                            />
                        @endfor
                    </svg>

                    <img
                        src="{{ $about->image
                            ? asset('storage/' . $about->image)
                            : asset('assets4/images/about/about-img1.jpg') }}"
                        alt="{{ $about->title }}"
                        class="img-fluid"
                    />
                </div>
            </div>

            <!-- CONTENT -->
            <div class="col-lg-6 col-12">
                <div class="about-five-content">

                    <!-- SUBTITLE -->
                    <h6 class="small-title text-uppercase">
                        {{ $about->subtitle ?? 'Tentang Sistem' }}
                    </h6>

                    <!-- TITLE -->
                    <h2 class="main-title fw-bold mt-2">
                        {{ $about->title }}
                    </h2>

                    <!-- DESCRIPTION -->
                    @if($about->description)
                        <p class="mt-3">
                            {{ $about->description }}
                        </p>
                    @endif

                    <!-- TABS -->
                    @if(count($metadata))
                        <div class="about-five-tab mt-4">

                            <!-- TAB NAV -->
                            <nav>
                                <div class="nav nav-tabs" role="tablist">
                                    @foreach($metadata as $key => $tab)
                                        <button
                                            class="nav-link {{ $loop->first ? 'active' : '' }}"
                                            id="tab-{{ $key }}"
                                            data-bs-toggle="tab"
                                            data-bs-target="#content-{{ $key }}"
                                            type="button"
                                            role="tab"
                                        >
                                            {{ $tab['label'] ?? ucfirst($key) }}
                                        </button>
                                    @endforeach
                                </div>
                            </nav>

                            <!-- TAB CONTENT -->
                            <div class="tab-content mt-3">
                                @foreach($metadata as $key => $tab)
                                    <div
                                        class="tab-pane fade {{ $loop->first ? 'show active' : '' }}"
                                        id="content-{{ $key }}"
                                        role="tabpanel"
                                    >
                                        @if(!empty($tab['title']))
                                            <h5 class="fw-bold mb-2">
                                                {{ $tab['title'] }}
                                            </h5>
                                        @endif

                                        {!! $tab['content'] ?? '' !!}
                                    </div>
                                @endforeach
                            </div>

                        </div>
                    @endif

                </div>
            </div>

        </div>
    </div>
</section>
@endif
<!--====== ABOUT SECTION END ======-->
