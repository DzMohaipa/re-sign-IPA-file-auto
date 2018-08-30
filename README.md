# re-sign-IPA-file-auto
# re-sgin ipa file auto from url's :) beta2
اول اداة عربيه لوتوقيع تطبيقات ios من رابط 

التعديلات المهمه:
اول ملف تعدل فيه مسارات البدروفايل ومسارات المجلدات`` sgin.sh``
```

#  iPhone Distribution: abdaslam abdallah (xxxxxxx) اسم شهادة المطورين مثال
Certificate_Name="iPhone Distribution: xxxxxxx xxxxxx (xxxxxxx)"

# مسار بروفايل
Profile_Path="/Users/xxxx/xxxxxx/xxxx/xxx/embedded.mobileprovision"
#مسار ملفات التطبيقات
IPAS_FOLDER="/Users/xxxxxxx/xxxxx/xxxxxx/rsn/files"

#   لا تغير شي// عدد التكرارات المرادة
DUPLICATS_NUMBER="0"

# مسار استخراج الملفات بعد التوقيع
OUTPUT_DIR="/xxxxx/xxxxxx/xxxxxx/re-sign-IPA-file-auto"

```

التعديل على سطر الاوامر في ملف index.php بما يتناسب مع مسار المجلدات لديك
```php
$output = shell_exec('chmod +x /Users/abdulsalmabdullh/Documents/test/rsn/sgin.sh ');// هذا
$output = shell_exec('/Users/abdulsalmabdullh/Documents/test/rsn/sgin.sh ');// وهذا 
```
رجاء انتبه لوضع المسارات بمكانهم الصحيح لتشغيل التوقيع بدون مشاكل

# التركيب علئ السيرفر

لازم تحجز دومين وشهادة امان من موقع 

https://www.name.com/

طبعا لازم تاخذ شهادة الامان الي تقبل الدومين الفرعي اذا كان عندك مجموعات كثيره

بس تشتريها وتحجز الدومين

تغير اي بي الدومين لاي بي سيرفرك من برنامج mamp pro

وتنزل ملفات شهادة الامان crt & key 
وتحطهم في برنامج mamp 
من خلال الذهاب الئ خانة ssl 
من ثم تعلم على ال ssl 
وتحت الخيار هذا رح تحصل مسار الي تحط فيه ملفات شهادة الامان
# ملاحضه

الاداه لازالت تجريبيه ولكن تعمل بكفاءه حاليا بدون مشاكل
واي مشكله تواجهونها تواصلو معاي في تويتر

fast sgin by @iMokhles
#
  also you can donat me :) 
  paypal : ssvkw@hotmail.com
