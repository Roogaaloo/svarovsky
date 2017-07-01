<div class="rev_slider_wrapper">
    <div id="slider1" class="rev_slider" data-version="5.0">
        <ul>
            @foreach($banners as $banner)
                <li data-transition="fade">
                    <!-- MAIN IMAGE -->
                    <img src="{{ $banner->image }}" alt="" width="1920">
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption h1"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-60','-60','-60','-100']"
                         data-fontsize="['70','70','100','120']"
                         data-lineheight="['60','70','80','130']"
                         data-letterspacing="['0','0','0','0']"
                         data-textalign="['center','center','center','center']"
                         data-fontweight="800"
                         data-color="#fff"
                         data-whitespace="['pre','pre','pre','pre']"
                         style="text-shadow: 1px 1px 2px rgba(255,255,255,0.3);"
                         data-transform_idle="o:1;"
                         data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:500;e:Power3.easeIn;"
                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                         data-start="500">{{ $banner->title }}
                    </div>
                    <div class="tp-caption h1"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['20','20','40',20']"
                         data-fontsize="['40','40','55','60']"
                         data-lineheight="['60','70','80','130']"
                         data-letterspacing="['0','0','0','0']"
                         data-textalign="['center','center','center','center']"
                         data-fontweight="800"
                         data-color="#fff"
                         data-whitespace="['pre','pre','pre','pre']"
                         style="text-shadow: 1px 1px 2px rgba(255,255,255,0.3);"
                         data-transform_idle="o:1;"
                         data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:500;e:Power3.easeIn;"
                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                         data-start="1000">{{ $banner->perex }}
                    </div>
                    <div class="tp-caption h1"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['100','100','150',180']"
                         data-fontsize="['50','50','40','30']"
                         data-lineheight="['60','70','80','130']"
                         data-letterspacing="['0','0','0','0']"
                         data-textalign="['center','center','center','center']"
                         data-fontweight="600"
                         data-whitespace="['pre','pre','pre','pre']"
                         data-transform_idle="o:1;"
                         data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:500;e:Power3.easeIn;"
                         data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                         data-start="1500"><a class="btn btn-negative btn-meeting">Sjednat schůzku</a>
                    </div>
                </li>
            @endforeach
        </ul>
    </div><!-- END REVOLUTION SLIDER -->
</div><!-- END OF SLIDER WRAPPER -->