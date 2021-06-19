<!-- Contact section -->
<div class="contact-section spad fix">
    <div class="container">
        <div class="row">
            <!-- contact info -->
            <div class="col-md-5 col-md-offset-1 contact-info col-push">
                @foreach ($contactSections as $item)
                    <div class="section-title left">
                        <h2>{{$item->titre_contact}}</h2>
                    </div>
                    <p>{{$item->texte_contact}}</p>
                    <h3 class="mt60">{{$item->info_contact}}</h3>
                    <p class="con-item">{{$item->adresse_contact}}<br> {{$item->commune_contact}} </p>
                    <p class="con-item">{{$item->numero_contact}}</p>
                    <p class="con-item">{{$item->email_contact}}</p>                    
                @endforeach
            </div>
            <!-- contact form -->
            <div class="col-md-6 col-pull">
                <form action="{{route('contact.store')}}" method="POST" class="form-class">
                    @csrf
                    <input type="hidden" name="contactForStore" id="contactForStore">
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" id="name" name="name" placeholder="Your name">
                            @error('name')
                            <span class="text-red-400">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror                
                        </div>
                        <div class="col-sm-6">
                            <input type="email" id="mail" name="mail" placeholder="Your email">
                            @error('mail')
                            <span class="text-red-400">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror                
                        </div>
                        <div class="col-sm-12">
                            <label for="subject">Choose a subject</label>
                            <select name="subject" id="subject">
                                @foreach ($subjects as $item)
                                    <option value="{{$item->subject}}">{{$item->subject}}</option>
                                @endforeach
                            </select>
                            @error('subject')
                            <span class="text-red-400">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror                
                            <textarea id="message" name="message" placeholder="Message"></textarea>
                            @error('message')
                            <span class="text-red-400">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror                
                            <button type="submit" class="site-btn">send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact section end-->