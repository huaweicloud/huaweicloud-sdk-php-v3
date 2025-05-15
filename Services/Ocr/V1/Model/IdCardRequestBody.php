<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IdCardRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IdCardRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * image  与url二选一。  图片的Base64编码，要求单个图片其对应的Base64编码不超过10MB。文件在Base64编码后会大于文件原本大小，请注意做好边界判断，建议文件大小不超过7MB。 图片最小边不小于15px，最长边不超过8192px。支持JPEG、JPG、PNG、BMP、TIFF格式。  图片文件Base64编码字符串，点击[这里](https://support.huaweicloud.com/ocr_faq/ocr_01_0032.html)查看详细获取方式。
    * url  与image二选一。  单个图片其对应的Base64编码不超过10MB。文件在Base64编码后会大于文件原本大小，请注意做好边界判断，建议文件大小不超过7MB。 图片最小边不小于15px，最长边不超过8192px。支持JPEG、JPG、PNG、BMP、TIFF格式。 图片的URL路径，目前支持： - 公网http/https url - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/api-ocr/ocr_03_0132.html)。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
    * side  - front：身份证人像面。 - back：身份证国徽面。 - double_side：身份证双面信息 > 说明： 如果参数值为空或无该参数，系统自动识别，建议填写，准确率更高。
    * returnVerification  返回校验身份证号等信息的开关，默认false，可选值如下所示：  - true：返回校验信息  - false：不返回校验信息
    * returnTextLocation  识别到的文字块的区域位置信息。可选值包括：  - true：返回各个文字块区域  - false：不返回各个文字块区域  如果无该参数，系统默认不返回文字块区域。如果输入参数不是Boolean类型，则会报非法参数错误。
    * detectReproduce  返回判断身份证图像是否经过翻拍的开关，默认false，可选值如下所示：  - true ：开启判断身份证图像是否经过翻拍功能  - false：关闭判断身份证图像是否经过翻拍功能
    * detectCopy  返回判断身份证图像是否是黑白复印件的开关，默认false，可选值如下所示：  - true ：开启判断身份证图像是否是复印件功能  - false : 关闭身份证图像是否是复印件功能
    * returnPortraitLocation  返回头像位置信息的开关，默认false，可选值如下所示：  - true ：开启返回头像位置信息的功能 - false : 关闭返回头像位置信息的功能
    * returnPortraitImage  返回头像图片信息（base64码）的开关，默认false，可选值如下所示：  - true ：开启头像图片信息（base64码）的功能 - false : 关闭头像图片信息（base64码）的功能
    * returnAdjustedImage  返回身份证卡面（base64码）的开关，默认false，可选值如下所示：  - true ：开启身份证卡面（base64码）的功能 - false : 关闭身份证卡面（base64码）的功能
    * detectTampering  身份证图像PS告警功能开关，默认false，可选值如下：  - true ：开启身份证图像PS告警功能 - false : 关闭身份证图像告警功能
    * detectBorderIntegrity  身份证图像边框完整性告警功能开关，默认false，可选值如下：  - true ：打开身份证图像边框完整性告警功能 - false : 关闭身份证图像边框完整性告警功能
    * detectBlockingWithinBorder  身份证图像边框内部是否有异物遮挡的告警功能开关，默认false，可选值如下：  - true ：开启身份证边框内部异物遮挡告警功能 - false : 关闭身份证边框内部异物遮挡告警功能
    * detectBlur  身份证图像模糊告警功能的开关，默认false，可选值如下：  - true ：开启身份证图像模糊告警功能 - false : 关闭身份证图像模糊告警功能
    * detectInterim  临时身份证告警功能开关，默认false，可选值如下：  - true ：开启临时身份证告警功能 - false : 关闭临时身份证告警功能
    * detectGlare  身份证反光告警功能开关，默认false，可选值如下：  - true ：开启身份证反光告警功能  - false : 关闭身份证反光告警功能
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'image' => 'string',
            'url' => 'string',
            'side' => 'string',
            'returnVerification' => 'bool',
            'returnTextLocation' => 'bool',
            'detectReproduce' => 'bool',
            'detectCopy' => 'bool',
            'returnPortraitLocation' => 'bool',
            'returnPortraitImage' => 'bool',
            'returnAdjustedImage' => 'bool',
            'detectTampering' => 'bool',
            'detectBorderIntegrity' => 'bool',
            'detectBlockingWithinBorder' => 'bool',
            'detectBlur' => 'bool',
            'detectInterim' => 'bool',
            'detectGlare' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * image  与url二选一。  图片的Base64编码，要求单个图片其对应的Base64编码不超过10MB。文件在Base64编码后会大于文件原本大小，请注意做好边界判断，建议文件大小不超过7MB。 图片最小边不小于15px，最长边不超过8192px。支持JPEG、JPG、PNG、BMP、TIFF格式。  图片文件Base64编码字符串，点击[这里](https://support.huaweicloud.com/ocr_faq/ocr_01_0032.html)查看详细获取方式。
    * url  与image二选一。  单个图片其对应的Base64编码不超过10MB。文件在Base64编码后会大于文件原本大小，请注意做好边界判断，建议文件大小不超过7MB。 图片最小边不小于15px，最长边不超过8192px。支持JPEG、JPG、PNG、BMP、TIFF格式。 图片的URL路径，目前支持： - 公网http/https url - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/api-ocr/ocr_03_0132.html)。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
    * side  - front：身份证人像面。 - back：身份证国徽面。 - double_side：身份证双面信息 > 说明： 如果参数值为空或无该参数，系统自动识别，建议填写，准确率更高。
    * returnVerification  返回校验身份证号等信息的开关，默认false，可选值如下所示：  - true：返回校验信息  - false：不返回校验信息
    * returnTextLocation  识别到的文字块的区域位置信息。可选值包括：  - true：返回各个文字块区域  - false：不返回各个文字块区域  如果无该参数，系统默认不返回文字块区域。如果输入参数不是Boolean类型，则会报非法参数错误。
    * detectReproduce  返回判断身份证图像是否经过翻拍的开关，默认false，可选值如下所示：  - true ：开启判断身份证图像是否经过翻拍功能  - false：关闭判断身份证图像是否经过翻拍功能
    * detectCopy  返回判断身份证图像是否是黑白复印件的开关，默认false，可选值如下所示：  - true ：开启判断身份证图像是否是复印件功能  - false : 关闭身份证图像是否是复印件功能
    * returnPortraitLocation  返回头像位置信息的开关，默认false，可选值如下所示：  - true ：开启返回头像位置信息的功能 - false : 关闭返回头像位置信息的功能
    * returnPortraitImage  返回头像图片信息（base64码）的开关，默认false，可选值如下所示：  - true ：开启头像图片信息（base64码）的功能 - false : 关闭头像图片信息（base64码）的功能
    * returnAdjustedImage  返回身份证卡面（base64码）的开关，默认false，可选值如下所示：  - true ：开启身份证卡面（base64码）的功能 - false : 关闭身份证卡面（base64码）的功能
    * detectTampering  身份证图像PS告警功能开关，默认false，可选值如下：  - true ：开启身份证图像PS告警功能 - false : 关闭身份证图像告警功能
    * detectBorderIntegrity  身份证图像边框完整性告警功能开关，默认false，可选值如下：  - true ：打开身份证图像边框完整性告警功能 - false : 关闭身份证图像边框完整性告警功能
    * detectBlockingWithinBorder  身份证图像边框内部是否有异物遮挡的告警功能开关，默认false，可选值如下：  - true ：开启身份证边框内部异物遮挡告警功能 - false : 关闭身份证边框内部异物遮挡告警功能
    * detectBlur  身份证图像模糊告警功能的开关，默认false，可选值如下：  - true ：开启身份证图像模糊告警功能 - false : 关闭身份证图像模糊告警功能
    * detectInterim  临时身份证告警功能开关，默认false，可选值如下：  - true ：开启临时身份证告警功能 - false : 关闭临时身份证告警功能
    * detectGlare  身份证反光告警功能开关，默认false，可选值如下：  - true ：开启身份证反光告警功能  - false : 关闭身份证反光告警功能
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'image' => null,
        'url' => null,
        'side' => null,
        'returnVerification' => null,
        'returnTextLocation' => null,
        'detectReproduce' => null,
        'detectCopy' => null,
        'returnPortraitLocation' => null,
        'returnPortraitImage' => null,
        'returnAdjustedImage' => null,
        'detectTampering' => null,
        'detectBorderIntegrity' => null,
        'detectBlockingWithinBorder' => null,
        'detectBlur' => null,
        'detectInterim' => null,
        'detectGlare' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * image  与url二选一。  图片的Base64编码，要求单个图片其对应的Base64编码不超过10MB。文件在Base64编码后会大于文件原本大小，请注意做好边界判断，建议文件大小不超过7MB。 图片最小边不小于15px，最长边不超过8192px。支持JPEG、JPG、PNG、BMP、TIFF格式。  图片文件Base64编码字符串，点击[这里](https://support.huaweicloud.com/ocr_faq/ocr_01_0032.html)查看详细获取方式。
    * url  与image二选一。  单个图片其对应的Base64编码不超过10MB。文件在Base64编码后会大于文件原本大小，请注意做好边界判断，建议文件大小不超过7MB。 图片最小边不小于15px，最长边不超过8192px。支持JPEG、JPG、PNG、BMP、TIFF格式。 图片的URL路径，目前支持： - 公网http/https url - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/api-ocr/ocr_03_0132.html)。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
    * side  - front：身份证人像面。 - back：身份证国徽面。 - double_side：身份证双面信息 > 说明： 如果参数值为空或无该参数，系统自动识别，建议填写，准确率更高。
    * returnVerification  返回校验身份证号等信息的开关，默认false，可选值如下所示：  - true：返回校验信息  - false：不返回校验信息
    * returnTextLocation  识别到的文字块的区域位置信息。可选值包括：  - true：返回各个文字块区域  - false：不返回各个文字块区域  如果无该参数，系统默认不返回文字块区域。如果输入参数不是Boolean类型，则会报非法参数错误。
    * detectReproduce  返回判断身份证图像是否经过翻拍的开关，默认false，可选值如下所示：  - true ：开启判断身份证图像是否经过翻拍功能  - false：关闭判断身份证图像是否经过翻拍功能
    * detectCopy  返回判断身份证图像是否是黑白复印件的开关，默认false，可选值如下所示：  - true ：开启判断身份证图像是否是复印件功能  - false : 关闭身份证图像是否是复印件功能
    * returnPortraitLocation  返回头像位置信息的开关，默认false，可选值如下所示：  - true ：开启返回头像位置信息的功能 - false : 关闭返回头像位置信息的功能
    * returnPortraitImage  返回头像图片信息（base64码）的开关，默认false，可选值如下所示：  - true ：开启头像图片信息（base64码）的功能 - false : 关闭头像图片信息（base64码）的功能
    * returnAdjustedImage  返回身份证卡面（base64码）的开关，默认false，可选值如下所示：  - true ：开启身份证卡面（base64码）的功能 - false : 关闭身份证卡面（base64码）的功能
    * detectTampering  身份证图像PS告警功能开关，默认false，可选值如下：  - true ：开启身份证图像PS告警功能 - false : 关闭身份证图像告警功能
    * detectBorderIntegrity  身份证图像边框完整性告警功能开关，默认false，可选值如下：  - true ：打开身份证图像边框完整性告警功能 - false : 关闭身份证图像边框完整性告警功能
    * detectBlockingWithinBorder  身份证图像边框内部是否有异物遮挡的告警功能开关，默认false，可选值如下：  - true ：开启身份证边框内部异物遮挡告警功能 - false : 关闭身份证边框内部异物遮挡告警功能
    * detectBlur  身份证图像模糊告警功能的开关，默认false，可选值如下：  - true ：开启身份证图像模糊告警功能 - false : 关闭身份证图像模糊告警功能
    * detectInterim  临时身份证告警功能开关，默认false，可选值如下：  - true ：开启临时身份证告警功能 - false : 关闭临时身份证告警功能
    * detectGlare  身份证反光告警功能开关，默认false，可选值如下：  - true ：开启身份证反光告警功能  - false : 关闭身份证反光告警功能
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'image' => 'image',
            'url' => 'url',
            'side' => 'side',
            'returnVerification' => 'return_verification',
            'returnTextLocation' => 'return_text_location',
            'detectReproduce' => 'detect_reproduce',
            'detectCopy' => 'detect_copy',
            'returnPortraitLocation' => 'return_portrait_location',
            'returnPortraitImage' => 'return_portrait_image',
            'returnAdjustedImage' => 'return_adjusted_image',
            'detectTampering' => 'detect_tampering',
            'detectBorderIntegrity' => 'detect_border_integrity',
            'detectBlockingWithinBorder' => 'detect_blocking_within_border',
            'detectBlur' => 'detect_blur',
            'detectInterim' => 'detect_interim',
            'detectGlare' => 'detect_glare'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * image  与url二选一。  图片的Base64编码，要求单个图片其对应的Base64编码不超过10MB。文件在Base64编码后会大于文件原本大小，请注意做好边界判断，建议文件大小不超过7MB。 图片最小边不小于15px，最长边不超过8192px。支持JPEG、JPG、PNG、BMP、TIFF格式。  图片文件Base64编码字符串，点击[这里](https://support.huaweicloud.com/ocr_faq/ocr_01_0032.html)查看详细获取方式。
    * url  与image二选一。  单个图片其对应的Base64编码不超过10MB。文件在Base64编码后会大于文件原本大小，请注意做好边界判断，建议文件大小不超过7MB。 图片最小边不小于15px，最长边不超过8192px。支持JPEG、JPG、PNG、BMP、TIFF格式。 图片的URL路径，目前支持： - 公网http/https url - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/api-ocr/ocr_03_0132.html)。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
    * side  - front：身份证人像面。 - back：身份证国徽面。 - double_side：身份证双面信息 > 说明： 如果参数值为空或无该参数，系统自动识别，建议填写，准确率更高。
    * returnVerification  返回校验身份证号等信息的开关，默认false，可选值如下所示：  - true：返回校验信息  - false：不返回校验信息
    * returnTextLocation  识别到的文字块的区域位置信息。可选值包括：  - true：返回各个文字块区域  - false：不返回各个文字块区域  如果无该参数，系统默认不返回文字块区域。如果输入参数不是Boolean类型，则会报非法参数错误。
    * detectReproduce  返回判断身份证图像是否经过翻拍的开关，默认false，可选值如下所示：  - true ：开启判断身份证图像是否经过翻拍功能  - false：关闭判断身份证图像是否经过翻拍功能
    * detectCopy  返回判断身份证图像是否是黑白复印件的开关，默认false，可选值如下所示：  - true ：开启判断身份证图像是否是复印件功能  - false : 关闭身份证图像是否是复印件功能
    * returnPortraitLocation  返回头像位置信息的开关，默认false，可选值如下所示：  - true ：开启返回头像位置信息的功能 - false : 关闭返回头像位置信息的功能
    * returnPortraitImage  返回头像图片信息（base64码）的开关，默认false，可选值如下所示：  - true ：开启头像图片信息（base64码）的功能 - false : 关闭头像图片信息（base64码）的功能
    * returnAdjustedImage  返回身份证卡面（base64码）的开关，默认false，可选值如下所示：  - true ：开启身份证卡面（base64码）的功能 - false : 关闭身份证卡面（base64码）的功能
    * detectTampering  身份证图像PS告警功能开关，默认false，可选值如下：  - true ：开启身份证图像PS告警功能 - false : 关闭身份证图像告警功能
    * detectBorderIntegrity  身份证图像边框完整性告警功能开关，默认false，可选值如下：  - true ：打开身份证图像边框完整性告警功能 - false : 关闭身份证图像边框完整性告警功能
    * detectBlockingWithinBorder  身份证图像边框内部是否有异物遮挡的告警功能开关，默认false，可选值如下：  - true ：开启身份证边框内部异物遮挡告警功能 - false : 关闭身份证边框内部异物遮挡告警功能
    * detectBlur  身份证图像模糊告警功能的开关，默认false，可选值如下：  - true ：开启身份证图像模糊告警功能 - false : 关闭身份证图像模糊告警功能
    * detectInterim  临时身份证告警功能开关，默认false，可选值如下：  - true ：开启临时身份证告警功能 - false : 关闭临时身份证告警功能
    * detectGlare  身份证反光告警功能开关，默认false，可选值如下：  - true ：开启身份证反光告警功能  - false : 关闭身份证反光告警功能
    *
    * @var string[]
    */
    protected static $setters = [
            'image' => 'setImage',
            'url' => 'setUrl',
            'side' => 'setSide',
            'returnVerification' => 'setReturnVerification',
            'returnTextLocation' => 'setReturnTextLocation',
            'detectReproduce' => 'setDetectReproduce',
            'detectCopy' => 'setDetectCopy',
            'returnPortraitLocation' => 'setReturnPortraitLocation',
            'returnPortraitImage' => 'setReturnPortraitImage',
            'returnAdjustedImage' => 'setReturnAdjustedImage',
            'detectTampering' => 'setDetectTampering',
            'detectBorderIntegrity' => 'setDetectBorderIntegrity',
            'detectBlockingWithinBorder' => 'setDetectBlockingWithinBorder',
            'detectBlur' => 'setDetectBlur',
            'detectInterim' => 'setDetectInterim',
            'detectGlare' => 'setDetectGlare'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * image  与url二选一。  图片的Base64编码，要求单个图片其对应的Base64编码不超过10MB。文件在Base64编码后会大于文件原本大小，请注意做好边界判断，建议文件大小不超过7MB。 图片最小边不小于15px，最长边不超过8192px。支持JPEG、JPG、PNG、BMP、TIFF格式。  图片文件Base64编码字符串，点击[这里](https://support.huaweicloud.com/ocr_faq/ocr_01_0032.html)查看详细获取方式。
    * url  与image二选一。  单个图片其对应的Base64编码不超过10MB。文件在Base64编码后会大于文件原本大小，请注意做好边界判断，建议文件大小不超过7MB。 图片最小边不小于15px，最长边不超过8192px。支持JPEG、JPG、PNG、BMP、TIFF格式。 图片的URL路径，目前支持： - 公网http/https url - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/api-ocr/ocr_03_0132.html)。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
    * side  - front：身份证人像面。 - back：身份证国徽面。 - double_side：身份证双面信息 > 说明： 如果参数值为空或无该参数，系统自动识别，建议填写，准确率更高。
    * returnVerification  返回校验身份证号等信息的开关，默认false，可选值如下所示：  - true：返回校验信息  - false：不返回校验信息
    * returnTextLocation  识别到的文字块的区域位置信息。可选值包括：  - true：返回各个文字块区域  - false：不返回各个文字块区域  如果无该参数，系统默认不返回文字块区域。如果输入参数不是Boolean类型，则会报非法参数错误。
    * detectReproduce  返回判断身份证图像是否经过翻拍的开关，默认false，可选值如下所示：  - true ：开启判断身份证图像是否经过翻拍功能  - false：关闭判断身份证图像是否经过翻拍功能
    * detectCopy  返回判断身份证图像是否是黑白复印件的开关，默认false，可选值如下所示：  - true ：开启判断身份证图像是否是复印件功能  - false : 关闭身份证图像是否是复印件功能
    * returnPortraitLocation  返回头像位置信息的开关，默认false，可选值如下所示：  - true ：开启返回头像位置信息的功能 - false : 关闭返回头像位置信息的功能
    * returnPortraitImage  返回头像图片信息（base64码）的开关，默认false，可选值如下所示：  - true ：开启头像图片信息（base64码）的功能 - false : 关闭头像图片信息（base64码）的功能
    * returnAdjustedImage  返回身份证卡面（base64码）的开关，默认false，可选值如下所示：  - true ：开启身份证卡面（base64码）的功能 - false : 关闭身份证卡面（base64码）的功能
    * detectTampering  身份证图像PS告警功能开关，默认false，可选值如下：  - true ：开启身份证图像PS告警功能 - false : 关闭身份证图像告警功能
    * detectBorderIntegrity  身份证图像边框完整性告警功能开关，默认false，可选值如下：  - true ：打开身份证图像边框完整性告警功能 - false : 关闭身份证图像边框完整性告警功能
    * detectBlockingWithinBorder  身份证图像边框内部是否有异物遮挡的告警功能开关，默认false，可选值如下：  - true ：开启身份证边框内部异物遮挡告警功能 - false : 关闭身份证边框内部异物遮挡告警功能
    * detectBlur  身份证图像模糊告警功能的开关，默认false，可选值如下：  - true ：开启身份证图像模糊告警功能 - false : 关闭身份证图像模糊告警功能
    * detectInterim  临时身份证告警功能开关，默认false，可选值如下：  - true ：开启临时身份证告警功能 - false : 关闭临时身份证告警功能
    * detectGlare  身份证反光告警功能开关，默认false，可选值如下：  - true ：开启身份证反光告警功能  - false : 关闭身份证反光告警功能
    *
    * @var string[]
    */
    protected static $getters = [
            'image' => 'getImage',
            'url' => 'getUrl',
            'side' => 'getSide',
            'returnVerification' => 'getReturnVerification',
            'returnTextLocation' => 'getReturnTextLocation',
            'detectReproduce' => 'getDetectReproduce',
            'detectCopy' => 'getDetectCopy',
            'returnPortraitLocation' => 'getReturnPortraitLocation',
            'returnPortraitImage' => 'getReturnPortraitImage',
            'returnAdjustedImage' => 'getReturnAdjustedImage',
            'detectTampering' => 'getDetectTampering',
            'detectBorderIntegrity' => 'getDetectBorderIntegrity',
            'detectBlockingWithinBorder' => 'getDetectBlockingWithinBorder',
            'detectBlur' => 'getDetectBlur',
            'detectInterim' => 'getDetectInterim',
            'detectGlare' => 'getDetectGlare'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['side'] = isset($data['side']) ? $data['side'] : null;
        $this->container['returnVerification'] = isset($data['returnVerification']) ? $data['returnVerification'] : null;
        $this->container['returnTextLocation'] = isset($data['returnTextLocation']) ? $data['returnTextLocation'] : null;
        $this->container['detectReproduce'] = isset($data['detectReproduce']) ? $data['detectReproduce'] : null;
        $this->container['detectCopy'] = isset($data['detectCopy']) ? $data['detectCopy'] : null;
        $this->container['returnPortraitLocation'] = isset($data['returnPortraitLocation']) ? $data['returnPortraitLocation'] : null;
        $this->container['returnPortraitImage'] = isset($data['returnPortraitImage']) ? $data['returnPortraitImage'] : null;
        $this->container['returnAdjustedImage'] = isset($data['returnAdjustedImage']) ? $data['returnAdjustedImage'] : null;
        $this->container['detectTampering'] = isset($data['detectTampering']) ? $data['detectTampering'] : null;
        $this->container['detectBorderIntegrity'] = isset($data['detectBorderIntegrity']) ? $data['detectBorderIntegrity'] : null;
        $this->container['detectBlockingWithinBorder'] = isset($data['detectBlockingWithinBorder']) ? $data['detectBlockingWithinBorder'] : null;
        $this->container['detectBlur'] = isset($data['detectBlur']) ? $data['detectBlur'] : null;
        $this->container['detectInterim'] = isset($data['detectInterim']) ? $data['detectInterim'] : null;
        $this->container['detectGlare'] = isset($data['detectGlare']) ? $data['detectGlare'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets image
    *  与url二选一。  图片的Base64编码，要求单个图片其对应的Base64编码不超过10MB。文件在Base64编码后会大于文件原本大小，请注意做好边界判断，建议文件大小不超过7MB。 图片最小边不小于15px，最长边不超过8192px。支持JPEG、JPG、PNG、BMP、TIFF格式。  图片文件Base64编码字符串，点击[这里](https://support.huaweicloud.com/ocr_faq/ocr_01_0032.html)查看详细获取方式。
    *
    * @return string|null
    */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
    * Sets image
    *
    * @param string|null $image 与url二选一。  图片的Base64编码，要求单个图片其对应的Base64编码不超过10MB。文件在Base64编码后会大于文件原本大小，请注意做好边界判断，建议文件大小不超过7MB。 图片最小边不小于15px，最长边不超过8192px。支持JPEG、JPG、PNG、BMP、TIFF格式。  图片文件Base64编码字符串，点击[这里](https://support.huaweicloud.com/ocr_faq/ocr_01_0032.html)查看详细获取方式。
    *
    * @return $this
    */
    public function setImage($image)
    {
        $this->container['image'] = $image;
        return $this;
    }

    /**
    * Gets url
    *  与image二选一。  单个图片其对应的Base64编码不超过10MB。文件在Base64编码后会大于文件原本大小，请注意做好边界判断，建议文件大小不超过7MB。 图片最小边不小于15px，最长边不超过8192px。支持JPEG、JPG、PNG、BMP、TIFF格式。 图片的URL路径，目前支持： - 公网http/https url - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/api-ocr/ocr_03_0132.html)。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url 与image二选一。  单个图片其对应的Base64编码不超过10MB。文件在Base64编码后会大于文件原本大小，请注意做好边界判断，建议文件大小不超过7MB。 图片最小边不小于15px，最长边不超过8192px。支持JPEG、JPG、PNG、BMP、TIFF格式。 图片的URL路径，目前支持： - 公网http/https url - OBS提供的url，使用OBS数据需要进行授权。包括对服务授权、临时授权、匿名公开授权，详情参见[配置OBS访问权限](https://support.huaweicloud.com/api-ocr/ocr_03_0132.html)。 > 说明： - 接口响应时间依赖于图片的下载时间，如果图片下载时间过长，会返回接口调用失败。 - 请保证被检测图片所在的存储服务稳定可靠，推荐使用OBS服务存储图片数据。 - url中不能存在中文字符，若存在，中文需要进行utf8编码。
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets side
    *  - front：身份证人像面。 - back：身份证国徽面。 - double_side：身份证双面信息 > 说明： 如果参数值为空或无该参数，系统自动识别，建议填写，准确率更高。
    *
    * @return string|null
    */
    public function getSide()
    {
        return $this->container['side'];
    }

    /**
    * Sets side
    *
    * @param string|null $side - front：身份证人像面。 - back：身份证国徽面。 - double_side：身份证双面信息 > 说明： 如果参数值为空或无该参数，系统自动识别，建议填写，准确率更高。
    *
    * @return $this
    */
    public function setSide($side)
    {
        $this->container['side'] = $side;
        return $this;
    }

    /**
    * Gets returnVerification
    *  返回校验身份证号等信息的开关，默认false，可选值如下所示：  - true：返回校验信息  - false：不返回校验信息
    *
    * @return bool|null
    */
    public function getReturnVerification()
    {
        return $this->container['returnVerification'];
    }

    /**
    * Sets returnVerification
    *
    * @param bool|null $returnVerification 返回校验身份证号等信息的开关，默认false，可选值如下所示：  - true：返回校验信息  - false：不返回校验信息
    *
    * @return $this
    */
    public function setReturnVerification($returnVerification)
    {
        $this->container['returnVerification'] = $returnVerification;
        return $this;
    }

    /**
    * Gets returnTextLocation
    *  识别到的文字块的区域位置信息。可选值包括：  - true：返回各个文字块区域  - false：不返回各个文字块区域  如果无该参数，系统默认不返回文字块区域。如果输入参数不是Boolean类型，则会报非法参数错误。
    *
    * @return bool|null
    */
    public function getReturnTextLocation()
    {
        return $this->container['returnTextLocation'];
    }

    /**
    * Sets returnTextLocation
    *
    * @param bool|null $returnTextLocation 识别到的文字块的区域位置信息。可选值包括：  - true：返回各个文字块区域  - false：不返回各个文字块区域  如果无该参数，系统默认不返回文字块区域。如果输入参数不是Boolean类型，则会报非法参数错误。
    *
    * @return $this
    */
    public function setReturnTextLocation($returnTextLocation)
    {
        $this->container['returnTextLocation'] = $returnTextLocation;
        return $this;
    }

    /**
    * Gets detectReproduce
    *  返回判断身份证图像是否经过翻拍的开关，默认false，可选值如下所示：  - true ：开启判断身份证图像是否经过翻拍功能  - false：关闭判断身份证图像是否经过翻拍功能
    *
    * @return bool|null
    */
    public function getDetectReproduce()
    {
        return $this->container['detectReproduce'];
    }

    /**
    * Sets detectReproduce
    *
    * @param bool|null $detectReproduce 返回判断身份证图像是否经过翻拍的开关，默认false，可选值如下所示：  - true ：开启判断身份证图像是否经过翻拍功能  - false：关闭判断身份证图像是否经过翻拍功能
    *
    * @return $this
    */
    public function setDetectReproduce($detectReproduce)
    {
        $this->container['detectReproduce'] = $detectReproduce;
        return $this;
    }

    /**
    * Gets detectCopy
    *  返回判断身份证图像是否是黑白复印件的开关，默认false，可选值如下所示：  - true ：开启判断身份证图像是否是复印件功能  - false : 关闭身份证图像是否是复印件功能
    *
    * @return bool|null
    */
    public function getDetectCopy()
    {
        return $this->container['detectCopy'];
    }

    /**
    * Sets detectCopy
    *
    * @param bool|null $detectCopy 返回判断身份证图像是否是黑白复印件的开关，默认false，可选值如下所示：  - true ：开启判断身份证图像是否是复印件功能  - false : 关闭身份证图像是否是复印件功能
    *
    * @return $this
    */
    public function setDetectCopy($detectCopy)
    {
        $this->container['detectCopy'] = $detectCopy;
        return $this;
    }

    /**
    * Gets returnPortraitLocation
    *  返回头像位置信息的开关，默认false，可选值如下所示：  - true ：开启返回头像位置信息的功能 - false : 关闭返回头像位置信息的功能
    *
    * @return bool|null
    */
    public function getReturnPortraitLocation()
    {
        return $this->container['returnPortraitLocation'];
    }

    /**
    * Sets returnPortraitLocation
    *
    * @param bool|null $returnPortraitLocation 返回头像位置信息的开关，默认false，可选值如下所示：  - true ：开启返回头像位置信息的功能 - false : 关闭返回头像位置信息的功能
    *
    * @return $this
    */
    public function setReturnPortraitLocation($returnPortraitLocation)
    {
        $this->container['returnPortraitLocation'] = $returnPortraitLocation;
        return $this;
    }

    /**
    * Gets returnPortraitImage
    *  返回头像图片信息（base64码）的开关，默认false，可选值如下所示：  - true ：开启头像图片信息（base64码）的功能 - false : 关闭头像图片信息（base64码）的功能
    *
    * @return bool|null
    */
    public function getReturnPortraitImage()
    {
        return $this->container['returnPortraitImage'];
    }

    /**
    * Sets returnPortraitImage
    *
    * @param bool|null $returnPortraitImage 返回头像图片信息（base64码）的开关，默认false，可选值如下所示：  - true ：开启头像图片信息（base64码）的功能 - false : 关闭头像图片信息（base64码）的功能
    *
    * @return $this
    */
    public function setReturnPortraitImage($returnPortraitImage)
    {
        $this->container['returnPortraitImage'] = $returnPortraitImage;
        return $this;
    }

    /**
    * Gets returnAdjustedImage
    *  返回身份证卡面（base64码）的开关，默认false，可选值如下所示：  - true ：开启身份证卡面（base64码）的功能 - false : 关闭身份证卡面（base64码）的功能
    *
    * @return bool|null
    */
    public function getReturnAdjustedImage()
    {
        return $this->container['returnAdjustedImage'];
    }

    /**
    * Sets returnAdjustedImage
    *
    * @param bool|null $returnAdjustedImage 返回身份证卡面（base64码）的开关，默认false，可选值如下所示：  - true ：开启身份证卡面（base64码）的功能 - false : 关闭身份证卡面（base64码）的功能
    *
    * @return $this
    */
    public function setReturnAdjustedImage($returnAdjustedImage)
    {
        $this->container['returnAdjustedImage'] = $returnAdjustedImage;
        return $this;
    }

    /**
    * Gets detectTampering
    *  身份证图像PS告警功能开关，默认false，可选值如下：  - true ：开启身份证图像PS告警功能 - false : 关闭身份证图像告警功能
    *
    * @return bool|null
    */
    public function getDetectTampering()
    {
        return $this->container['detectTampering'];
    }

    /**
    * Sets detectTampering
    *
    * @param bool|null $detectTampering 身份证图像PS告警功能开关，默认false，可选值如下：  - true ：开启身份证图像PS告警功能 - false : 关闭身份证图像告警功能
    *
    * @return $this
    */
    public function setDetectTampering($detectTampering)
    {
        $this->container['detectTampering'] = $detectTampering;
        return $this;
    }

    /**
    * Gets detectBorderIntegrity
    *  身份证图像边框完整性告警功能开关，默认false，可选值如下：  - true ：打开身份证图像边框完整性告警功能 - false : 关闭身份证图像边框完整性告警功能
    *
    * @return bool|null
    */
    public function getDetectBorderIntegrity()
    {
        return $this->container['detectBorderIntegrity'];
    }

    /**
    * Sets detectBorderIntegrity
    *
    * @param bool|null $detectBorderIntegrity 身份证图像边框完整性告警功能开关，默认false，可选值如下：  - true ：打开身份证图像边框完整性告警功能 - false : 关闭身份证图像边框完整性告警功能
    *
    * @return $this
    */
    public function setDetectBorderIntegrity($detectBorderIntegrity)
    {
        $this->container['detectBorderIntegrity'] = $detectBorderIntegrity;
        return $this;
    }

    /**
    * Gets detectBlockingWithinBorder
    *  身份证图像边框内部是否有异物遮挡的告警功能开关，默认false，可选值如下：  - true ：开启身份证边框内部异物遮挡告警功能 - false : 关闭身份证边框内部异物遮挡告警功能
    *
    * @return bool|null
    */
    public function getDetectBlockingWithinBorder()
    {
        return $this->container['detectBlockingWithinBorder'];
    }

    /**
    * Sets detectBlockingWithinBorder
    *
    * @param bool|null $detectBlockingWithinBorder 身份证图像边框内部是否有异物遮挡的告警功能开关，默认false，可选值如下：  - true ：开启身份证边框内部异物遮挡告警功能 - false : 关闭身份证边框内部异物遮挡告警功能
    *
    * @return $this
    */
    public function setDetectBlockingWithinBorder($detectBlockingWithinBorder)
    {
        $this->container['detectBlockingWithinBorder'] = $detectBlockingWithinBorder;
        return $this;
    }

    /**
    * Gets detectBlur
    *  身份证图像模糊告警功能的开关，默认false，可选值如下：  - true ：开启身份证图像模糊告警功能 - false : 关闭身份证图像模糊告警功能
    *
    * @return bool|null
    */
    public function getDetectBlur()
    {
        return $this->container['detectBlur'];
    }

    /**
    * Sets detectBlur
    *
    * @param bool|null $detectBlur 身份证图像模糊告警功能的开关，默认false，可选值如下：  - true ：开启身份证图像模糊告警功能 - false : 关闭身份证图像模糊告警功能
    *
    * @return $this
    */
    public function setDetectBlur($detectBlur)
    {
        $this->container['detectBlur'] = $detectBlur;
        return $this;
    }

    /**
    * Gets detectInterim
    *  临时身份证告警功能开关，默认false，可选值如下：  - true ：开启临时身份证告警功能 - false : 关闭临时身份证告警功能
    *
    * @return bool|null
    */
    public function getDetectInterim()
    {
        return $this->container['detectInterim'];
    }

    /**
    * Sets detectInterim
    *
    * @param bool|null $detectInterim 临时身份证告警功能开关，默认false，可选值如下：  - true ：开启临时身份证告警功能 - false : 关闭临时身份证告警功能
    *
    * @return $this
    */
    public function setDetectInterim($detectInterim)
    {
        $this->container['detectInterim'] = $detectInterim;
        return $this;
    }

    /**
    * Gets detectGlare
    *  身份证反光告警功能开关，默认false，可选值如下：  - true ：开启身份证反光告警功能  - false : 关闭身份证反光告警功能
    *
    * @return bool|null
    */
    public function getDetectGlare()
    {
        return $this->container['detectGlare'];
    }

    /**
    * Sets detectGlare
    *
    * @param bool|null $detectGlare 身份证反光告警功能开关，默认false，可选值如下：  - true ：开启身份证反光告警功能  - false : 关闭身份证反光告警功能
    *
    * @return $this
    */
    public function setDetectGlare($detectGlare)
    {
        $this->container['detectGlare'] = $detectGlare;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

