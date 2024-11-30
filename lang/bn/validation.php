<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute ক্ষেত্রটি অবশ্যই গৃহীত হতে হবে।',
    'accepted_if' => ':other :value হলে :attribute ক্ষেত্রটি অবশ্যই গৃহীত হতে হবে।',
    'active_url' => ':attribute ক্ষেত্রটি একটি বৈধ URL হতে হবে।',
    'after' => ':attribute ক্ষেত্রটি অবশ্যই :date-এর পরে একটি তারিখ হতে হবে।',
    'after_or_equal' => ':attribute ক্ষেত্রটি অবশ্যই :date-এর পরে বা সমান একটি তারিখ হতে হবে।',
    'alpha' => ':attribute ক্ষেত্রটি শুধুমাত্র অক্ষর থাকতে পারবে।',
    'alpha_dash' => ':attribute ক্ষেত্রটি শুধুমাত্র অক্ষর, সংখ্যা, ড্যাশ এবং আন্ডারস্কোর ধারণ করতে পারবে।',
    'alpha_num' => ':attribute ক্ষেত্রটি শুধুমাত্র অক্ষর এবং সংখ্যা থাকতে পারবে।',
    'array' => ':attribute ক্ষেত্রটি অবশ্যই একটি অ্যারে হতে হবে।',
    'ascii' => ':attribute ক্ষেত্রটি শুধুমাত্র একক-বাইটের অক্ষর, সংখ্যা এবং প্রতীক থাকতে পারবে।',
    'before' => ':attribute ক্ষেত্রটি অবশ্যই :date-এর আগে একটি তারিখ হতে হবে।',
    'before_or_equal' => ':attribute ক্ষেত্রটি অবশ্যই :date-এর আগে বা সমান একটি তারিখ হতে হবে।',
    'between' => [
        'array' => ':attribute ক্ষেত্রটিতে :min এবং :max এর মধ্যে আইটেম থাকতে হবে।',
        'file' => ':attribute ক্ষেত্রটির আকার :min এবং :max কিলোবাইটের মধ্যে হতে হবে।',
        'numeric' => ':attribute ক্ষেত্রটি :min এবং :max এর মধ্যে হতে হবে।',
        'string' => ':attribute ক্ষেত্রটির দৈর্ঘ্য :min এবং :max অক্ষরের মধ্যে হতে হবে।',
    ],
    'boolean' => ':attribute ক্ষেত্রটি অবশ্যই সত্য বা মিথ্যা হতে হবে।',
    'can' => ':attribute ক্ষেত্রটি একটি অবৈধ মান ধারণ করছে।',
    'confirmed' => ':attribute ক্ষেত্রটির নিশ্চিতকরণ মেলে না।',
    'current_password' => 'পাসওয়ার্ডটি সঠিক নয়।',
    'date' => ':attribute ক্ষেত্রটি একটি বৈধ তারিখ হতে হবে।',
    'date_equals' => ':attribute ক্ষেত্রটি অবশ্যই :date এর সমান একটি তারিখ হতে হবে।',
    'date_format' => ':attribute ক্ষেত্রটি :format ফরম্যাটের সাথে মেলাতে হবে।',
    'decimal' => ':attribute ক্ষেত্রটিতে :decimal দশমিক স্থান থাকতে হবে।',
    'declined' => ':attribute ক্ষেত্রটি অবশ্যই প্রত্যাখ্যাত হতে হবে।',
    'declined_if' => ':other :value হলে :attribute ক্ষেত্রটি অবশ্যই প্রত্যাখ্যাত হতে হবে।',
    'different' => ':attribute ক্ষেত্রটি এবং :other অবশ্যই আলাদা হতে হবে।',
    'digits' => ':attribute ক্ষেত্রটি :digits ডিজিট হতে হবে।',
    'digits_between' => ':attribute ক্ষেত্রটির দৈর্ঘ্য :min এবং :max ডিজিটের মধ্যে হতে হবে。',
    'dimensions' => ':attribute ক্ষেত্রটির অবৈধ চিত্রের মাত্রা রয়েছে।',
    'distinct' => ':attribute ক্ষেত্রটি একটি ডুপ্লিকেট মান ধারণ করছে।',
    'doesnt_end_with' => ':attribute ক্ষেত্রটি নিচের যেকোনো একটি দ্বারা শেষ হতে পারবে না: :values।',
    'doesnt_start_with' => ':attribute ক্ষেত্রটি নিচের যেকোনো একটি দিয়ে শুরু হতে পারবে না: :values।',
    'email' => ':attribute ক্ষেত্রটি একটি বৈধ ইমেইল ঠিকানা হতে হবে।',
    'ends_with' => ':attribute ক্ষেত্রটি নিচের যেকোনো একটি দিয়ে শেষ হতে হবে: :values।',
    'enum' => 'নির্বাচিত :attribute অবৈধ।',
    'exists' => 'নির্বাচিত :attribute অবৈধ।',
    'extensions' => ':attribute ক্ষেত্রটির এক বা একাধিক নিম্নলিখিত এক্সটেনশন থাকতে হবে: :values।',
    'file' => ':attribute ক্ষেত্রটি একটি ফাইল হতে হবে।',
    'filled' => ':attribute ক্ষেত্রটির একটি মান থাকতে হবে।',
    'gt' => [
        'array' => ':attribute ক্ষেত্রটিতে :value এর বেশি আইটেম থাকতে হবে।',
        'file' => ':attribute ক্ষেত্রটির আকার :value কিলোবাইটের বেশি হতে হবে।',
        'numeric' => ':attribute ক্ষেত্রটির মান :value এর বেশি হতে হবে।',
        'string' => ':attribute ক্ষেত্রটির দৈর্ঘ্য :value অক্ষরের বেশি হতে হবে।',
    ],
    'gte' => [
        'array' => ':attribute ক্ষেত্রটিতে :value আইটেম বা তার বেশি থাকতে হবে।',
        'file' => ':attribute ক্ষেত্রটির আকার :value কিলোবাইট বা তার বেশি হতে হবে।',
        'numeric' => ':attribute ক্ষেত্রটির মান :value বা তার বেশি হতে হবে।',
        'string' => ':attribute ক্ষেত্রটির দৈর্ঘ্য :value অক্ষর বা তার বেশি হতে হবে।',
    ],
    'hex_color' => ':attribute ক্ষেত্রটি একটি বৈধ হেক্সাডেসিমেল রং হতে হবে।',
    'image' => ':attribute ক্ষেত্রটি একটি চিত্র হতে হবে।',
    'in' => 'নির্বাচিত :attribute অবৈধ।',
    'in_array' => ':attribute ক্ষেত্রটি :other এ বিদ্যমান হতে হবে।',
    'integer' => ':attribute ক্ষেত্রটি একটি পূর্ণসংখ্যা হতে হবে।',
    'ip' => ':attribute ক্ষেত্রটি একটি বৈধ IP ঠিকানা হতে হবে।',
    'ipv4' => ':attribute ক্ষেত্রটি একটি বৈধ IPv4 ঠিকানা হতে হবে।',
    'ipv6' => ':attribute ক্ষেত্রটি একটি বৈধ IPv6 ঠিকানা হতে হবে।',
    'json' => ':attribute ক্ষেত্রটি একটি বৈধ JSON স্ট্রিং হতে হবে।',
    'list' => ':attribute ক্ষেত্রটি একটি তালিকা হতে হবে।',
    'lowercase' => ':attribute ক্ষেত্রটি ছোট অক্ষরে হতে হবে।',
    'lt' => [
        'array' => ':attribute ক্ষেত্রটিতে :value এর কম আইটেম থাকতে হবে।',
        'file' => ':attribute ক্ষেত্রটির আকার :value কিলোবাইটের কম হতে হবে।',
        'numeric' => ':attribute ক্ষেত্রটির মান :value এর কম হতে হবে।',
        'string' => ':attribute ক্ষেত্রটির দৈর্ঘ্য :value অক্ষরের কম হতে হবে।',
    ],
    'lte' => [
        'array' => ':attribute ক্ষেত্রটিতে :value আইটেম বা তার কম থাকতে হবে।',
        'file' => ':attribute ক্ষেত্রটির আকার :value কিলোবাইট বা তার কম হতে হবে।',
        'numeric' => ':attribute ক্ষেত্রটির মান :value বা তার কম হতে হবে।',
        'string' => ':attribute ক্ষেত্রটির দৈর্ঘ্য :value অক্ষর বা তার কম হতে হবে।',
    ],
    'mac_address' => ':attribute ক্ষেত্রটি একটি বৈধ MAC ঠিকানা হতে হবে।',
    'max' => [
        'array' => ':attribute ক্ষেত্রটিতে :max আইটেমের বেশি থাকতে পারবে না।',
        'file' => ':attribute ক্ষেত্রটির আকার :max কিলোবাইটের বেশি হতে পারবে না।',
        'numeric' => ':attribute ক্ষেত্রটির মান :max এর বেশি হতে পারবে না।',
        'string' => ':attribute ক্ষেত্রটির দৈর্ঘ্য :max অক্ষরের বেশি হতে পারবে না।',
    ],
    'max_digits' => ':attribute ক্ষেত্রটি :max ডিজিটের বেশি হতে পারবে না।',
    'mimes' => ':attribute ক্ষেত্রটি এই ধরনের একটি ফাইল হতে হবে: :values।',
    'mimetypes' => ':attribute ক্ষেত্রটি এই ধরনের একটি ফাইল হতে হবে: :values।',
    'min' => [
        'array' => ':attribute ক্ষেত্রটিতে কমপক্ষে :min আইটেম থাকতে হবে।',
        'file' => ':attribute ক্ষেত্রটির আকার কমপক্ষে :min কিলোবাইট হতে হবে।',
        'numeric' => ':attribute ক্ষেত্রটির মান কমপক্ষে :min হতে হবে।',
        'string' => ':attribute ক্ষেত্রটির দৈর্ঘ্য কমপক্ষে :min অক্ষর হতে হবে।',
    ],
    'min_digits' => ':attribute ক্ষেত্রটিতে কমপক্ষে :min ডিজিট থাকতে হবে।',
    'missing' => ':attribute ক্ষেত্রটি অনুপস্থিত থাকতে হবে।',
    'missing_if' => ':other :value হলে :attribute ক্ষেত্রটি অনুপস্থিত থাকতে হবে।',
    'missing_unless' => ':other :value না হলে :attribute ক্ষেত্রটি অনুপস্থিত থাকতে হবে।',
    'missing_with' => ':values উপস্থিত থাকলে :attribute ক্ষেত্রটি অনুপস্থিত থাকতে হবে।',
    'missing_with_all' => ':values সবগুলো উপস্থিত থাকলে :attribute ক্ষেত্রটি অনুপস্থিত থাকতে হবে।',
    'multiple_of' => ':attribute ক্ষেত্রটি :value এর গুণিতক হতে হবে।',
    'not_in' => 'নির্বাচিত :attribute অবৈধ।',
    'not_regex' => ':attribute ক্ষেত্রটির ফরম্যাট অবৈধ।',
    'numeric' => ':attribute ক্ষেত্রটি একটি সংখ্যা হতে হবে।',
    'password' => [
        'letters' => ':attribute ক্ষেত্রটিতে কমপক্ষে একটি অক্ষর থাকতে হবে।',
        'mixed' => ':attribute ক্ষেত্রটিতে কমপক্ষে একটি বড় অক্ষর এবং একটি ছোট অক্ষর থাকতে হবে।',
        'numbers' => ':attribute ক্ষেত্রটিতে কমপক্ষে একটি সংখ্যা থাকতে হবে।',
        'symbols' => ':attribute ক্ষেত্রটিতে কমপক্ষে একটি চিহ্ন থাকতে হবে।',
        'uncompromised' => 'প্রদানকৃত :attribute একটি ডেটা লিকের মধ্যে এসেছে। অনুগ্রহ করে একটি ভিন্ন :attribute নির্বাচন করুন।',
    ],
    'present' => ':attribute ক্ষেত্রটি উপস্থিত থাকতে হবে।',
    'present_if' => ':other :value হলে :attribute ক্ষেত্রটি উপস্থিত থাকতে হবে।',
    'present_unless' => ':other :value না হলে :attribute ক্ষেত্রটি উপস্থিত থাকতে হবে।',
    'present_with' => ':values উপস্থিত থাকলে :attribute ক্ষেত্রটি উপস্থিত থাকতে হবে।',
    'present_with_all' => ':values সবগুলো উপস্থিত থাকলে :attribute ক্ষেত্রটি উপস্থিত থাকতে হবে।',
    'prohibited' => ':attribute ক্ষেত্রটি নিষিদ্ধ।',
    'prohibited_if' => ':other :value হলে :attribute ক্ষেত্রটি নিষিদ্ধ।',
    'prohibited_unless' => ':other :values এর মধ্যে না থাকলে :attribute ক্ষেত্রটি নিষিদ্ধ।',
    'prohibits' => ':attribute ক্ষেত্রটি :other এর উপস্থিতি নিষিদ্ধ।',
    'regex' => ':attribute ক্ষেত্রটির ফরম্যাট অবৈধ।',
    'required' => ':attribute ক্ষেত্রটি আবশ্যক।',
    'required_array_keys' => ':attribute ক্ষেত্রটিতে :values এর জন্য এন্ট্রি থাকতে হবে।',
    'required_if' => ':other :value হলে :attribute ক্ষেত্রটি আবশ্যক।',
    'required_if_accepted' => ':other গ্রহণ করলে :attribute ক্ষেত্রটি আবশ্যক।',
    'required_if_declined' => ':other প্রত্যাখ্যান করলে :attribute ক্ষেত্রটি আবশ্যক।',
    'required_unless' => ':other :values এর মধ্যে না থাকলে :attribute ক্ষেত্রটি আবশ্যক।',
    'required_with' => ':values উপস্থিত থাকলে :attribute ক্ষেত্রটি আবশ্যক।',
    'required_with_all' => ':values সবগুলো উপস্থিত থাকলে :attribute ক্ষেত্রটি আবশ্যক।',
    'required_without' => ':values উপস্থিত না থাকলে :attribute ক্ষেত্রটি আবশ্যক।',
    'required_without_all' => ':values কোনোটিই উপস্থিত না থাকলে :attribute ক্ষেত্রটি আবশ্যক।',
    'same' => ':attribute ক্ষেত্রটি :other এর সাথে মেলে হতে হবে।',
    'size' => [
        'array' => ':attribute ক্ষেত্রটিতে :size আইটেম থাকতে হবে।',
        'file' => ':attribute ক্ষেত্রটির আকার :size কিলোবাইট হতে হবে।',
        'numeric' => ':attribute ক্ষেত্রটির মান :size হতে হবে।',
        'string' => ':attribute ক্ষেত্রটির দৈর্ঘ্য :size অক্ষর হতে হবে।',
    ],
    'starts_with' => ':attribute ক্ষেত্রটি নিচের যেকোনো একটি দিয়ে শুরু হতে হবে: :values।',
    'string' => ':attribute ক্ষেত্রটি একটি স্ট্রিং হতে হবে।',
    'timezone' => ':attribute ক্ষেত্রটি একটি বৈধ টাইমজোন হতে হবে।',
    'unique' => ':attribute ইতিমধ্যেই নেওয়া হয়েছে।',
    'uploaded' => ':attribute আপলোড করতে ব্যর্থ হয়েছে।',
    'uppercase' => ':attribute ক্ষেত্রটি বড় অক্ষরে হতে হবে।',
    'url' => ':attribute ক্ষেত্রটি একটি বৈধ URL হতে হবে।',
    'ulid' => ':attribute ক্ষেত্রটি একটি বৈধ ULID হতে হবে।',
    'uuid' => ':attribute ক্ষেত্রটি একটি বৈধ UUID হতে হবে।',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
