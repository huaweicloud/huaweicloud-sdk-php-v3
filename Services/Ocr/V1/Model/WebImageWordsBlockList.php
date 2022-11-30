<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WebImageWordsBlockList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WebImageWordsBlockList';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * words  文字块识别结果。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    * location  文字块的区域位置信息，列表形式，包含文字区域四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * extractedData  提取出的结构化JSON结果，该字典内的key值与入参列表extract_type的值一致，目前仅支持联系人信息提取，亦即key值为\"contact_info\"的字段。 若入参extract_type为空列表或该字段缺失时，不进行提取，此字段为空。
    * contactInfo  该字段表示提取的联系人信息，包括：姓名、联系电话、省市区以及详细地址。 若入参extract_type列表中无该字段，则此字段不存在。
    * imageSize  该字段表示返回图片宽高信息。 如入参extract_type列表中无该字段，则此字段不存在。
    * height  传入image_size时的返回，为图像高度。
    * width  传入image_size时的返回，为图像宽度。
    * name  传入contact_info时的返回，为姓名。
    * phone  传入contact_info时的返回，联系电话。
    * province  传入contact_info时的返回，省。
    * city  传入contact_info时的返回，市。
    * district  传入contact_info时的返回，县区。
    * detailAddress  传入contact_info时的返回，详细地址（不含省市区）。
    * fontList  文字块所属字体类型，列表形式，表示与文字块的文字最接近的字体类型。
    * fontScores  文字块所属字体类型的概率，列表形式，与font_list一一对应，表示文字块的文字属于某种字体类型的概率。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'words' => 'string',
            'confidence' => 'float',
            'location' => 'int[][]',
            'extractedData' => 'object',
            'contactInfo' => 'object',
            'imageSize' => 'object',
            'height' => 'int',
            'width' => 'int',
            'name' => 'string',
            'phone' => 'string',
            'province' => 'string',
            'city' => 'string',
            'district' => 'string',
            'detailAddress' => 'string',
            'fontList' => 'string[]',
            'fontScores' => 'float[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * words  文字块识别结果。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    * location  文字块的区域位置信息，列表形式，包含文字区域四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * extractedData  提取出的结构化JSON结果，该字典内的key值与入参列表extract_type的值一致，目前仅支持联系人信息提取，亦即key值为\"contact_info\"的字段。 若入参extract_type为空列表或该字段缺失时，不进行提取，此字段为空。
    * contactInfo  该字段表示提取的联系人信息，包括：姓名、联系电话、省市区以及详细地址。 若入参extract_type列表中无该字段，则此字段不存在。
    * imageSize  该字段表示返回图片宽高信息。 如入参extract_type列表中无该字段，则此字段不存在。
    * height  传入image_size时的返回，为图像高度。
    * width  传入image_size时的返回，为图像宽度。
    * name  传入contact_info时的返回，为姓名。
    * phone  传入contact_info时的返回，联系电话。
    * province  传入contact_info时的返回，省。
    * city  传入contact_info时的返回，市。
    * district  传入contact_info时的返回，县区。
    * detailAddress  传入contact_info时的返回，详细地址（不含省市区）。
    * fontList  文字块所属字体类型，列表形式，表示与文字块的文字最接近的字体类型。
    * fontScores  文字块所属字体类型的概率，列表形式，与font_list一一对应，表示文字块的文字属于某种字体类型的概率。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'words' => null,
        'confidence' => 'float',
        'location' => 'int32',
        'extractedData' => null,
        'contactInfo' => null,
        'imageSize' => null,
        'height' => 'int32',
        'width' => 'int32',
        'name' => null,
        'phone' => null,
        'province' => null,
        'city' => null,
        'district' => null,
        'detailAddress' => null,
        'fontList' => null,
        'fontScores' => 'float'
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
    * words  文字块识别结果。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    * location  文字块的区域位置信息，列表形式，包含文字区域四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * extractedData  提取出的结构化JSON结果，该字典内的key值与入参列表extract_type的值一致，目前仅支持联系人信息提取，亦即key值为\"contact_info\"的字段。 若入参extract_type为空列表或该字段缺失时，不进行提取，此字段为空。
    * contactInfo  该字段表示提取的联系人信息，包括：姓名、联系电话、省市区以及详细地址。 若入参extract_type列表中无该字段，则此字段不存在。
    * imageSize  该字段表示返回图片宽高信息。 如入参extract_type列表中无该字段，则此字段不存在。
    * height  传入image_size时的返回，为图像高度。
    * width  传入image_size时的返回，为图像宽度。
    * name  传入contact_info时的返回，为姓名。
    * phone  传入contact_info时的返回，联系电话。
    * province  传入contact_info时的返回，省。
    * city  传入contact_info时的返回，市。
    * district  传入contact_info时的返回，县区。
    * detailAddress  传入contact_info时的返回，详细地址（不含省市区）。
    * fontList  文字块所属字体类型，列表形式，表示与文字块的文字最接近的字体类型。
    * fontScores  文字块所属字体类型的概率，列表形式，与font_list一一对应，表示文字块的文字属于某种字体类型的概率。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'words' => 'words',
            'confidence' => 'confidence',
            'location' => 'location',
            'extractedData' => 'extracted_data',
            'contactInfo' => 'contact_info',
            'imageSize' => 'image_size',
            'height' => 'height',
            'width' => 'width',
            'name' => 'name',
            'phone' => 'phone',
            'province' => 'province',
            'city' => 'city',
            'district' => 'district',
            'detailAddress' => 'detail_address',
            'fontList' => 'font_list',
            'fontScores' => 'font_scores'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * words  文字块识别结果。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    * location  文字块的区域位置信息，列表形式，包含文字区域四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * extractedData  提取出的结构化JSON结果，该字典内的key值与入参列表extract_type的值一致，目前仅支持联系人信息提取，亦即key值为\"contact_info\"的字段。 若入参extract_type为空列表或该字段缺失时，不进行提取，此字段为空。
    * contactInfo  该字段表示提取的联系人信息，包括：姓名、联系电话、省市区以及详细地址。 若入参extract_type列表中无该字段，则此字段不存在。
    * imageSize  该字段表示返回图片宽高信息。 如入参extract_type列表中无该字段，则此字段不存在。
    * height  传入image_size时的返回，为图像高度。
    * width  传入image_size时的返回，为图像宽度。
    * name  传入contact_info时的返回，为姓名。
    * phone  传入contact_info时的返回，联系电话。
    * province  传入contact_info时的返回，省。
    * city  传入contact_info时的返回，市。
    * district  传入contact_info时的返回，县区。
    * detailAddress  传入contact_info时的返回，详细地址（不含省市区）。
    * fontList  文字块所属字体类型，列表形式，表示与文字块的文字最接近的字体类型。
    * fontScores  文字块所属字体类型的概率，列表形式，与font_list一一对应，表示文字块的文字属于某种字体类型的概率。
    *
    * @var string[]
    */
    protected static $setters = [
            'words' => 'setWords',
            'confidence' => 'setConfidence',
            'location' => 'setLocation',
            'extractedData' => 'setExtractedData',
            'contactInfo' => 'setContactInfo',
            'imageSize' => 'setImageSize',
            'height' => 'setHeight',
            'width' => 'setWidth',
            'name' => 'setName',
            'phone' => 'setPhone',
            'province' => 'setProvince',
            'city' => 'setCity',
            'district' => 'setDistrict',
            'detailAddress' => 'setDetailAddress',
            'fontList' => 'setFontList',
            'fontScores' => 'setFontScores'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * words  文字块识别结果。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    * location  文字块的区域位置信息，列表形式，包含文字区域四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * extractedData  提取出的结构化JSON结果，该字典内的key值与入参列表extract_type的值一致，目前仅支持联系人信息提取，亦即key值为\"contact_info\"的字段。 若入参extract_type为空列表或该字段缺失时，不进行提取，此字段为空。
    * contactInfo  该字段表示提取的联系人信息，包括：姓名、联系电话、省市区以及详细地址。 若入参extract_type列表中无该字段，则此字段不存在。
    * imageSize  该字段表示返回图片宽高信息。 如入参extract_type列表中无该字段，则此字段不存在。
    * height  传入image_size时的返回，为图像高度。
    * width  传入image_size时的返回，为图像宽度。
    * name  传入contact_info时的返回，为姓名。
    * phone  传入contact_info时的返回，联系电话。
    * province  传入contact_info时的返回，省。
    * city  传入contact_info时的返回，市。
    * district  传入contact_info时的返回，县区。
    * detailAddress  传入contact_info时的返回，详细地址（不含省市区）。
    * fontList  文字块所属字体类型，列表形式，表示与文字块的文字最接近的字体类型。
    * fontScores  文字块所属字体类型的概率，列表形式，与font_list一一对应，表示文字块的文字属于某种字体类型的概率。
    *
    * @var string[]
    */
    protected static $getters = [
            'words' => 'getWords',
            'confidence' => 'getConfidence',
            'location' => 'getLocation',
            'extractedData' => 'getExtractedData',
            'contactInfo' => 'getContactInfo',
            'imageSize' => 'getImageSize',
            'height' => 'getHeight',
            'width' => 'getWidth',
            'name' => 'getName',
            'phone' => 'getPhone',
            'province' => 'getProvince',
            'city' => 'getCity',
            'district' => 'getDistrict',
            'detailAddress' => 'getDetailAddress',
            'fontList' => 'getFontList',
            'fontScores' => 'getFontScores'
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
        $this->container['words'] = isset($data['words']) ? $data['words'] : null;
        $this->container['confidence'] = isset($data['confidence']) ? $data['confidence'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['extractedData'] = isset($data['extractedData']) ? $data['extractedData'] : null;
        $this->container['contactInfo'] = isset($data['contactInfo']) ? $data['contactInfo'] : null;
        $this->container['imageSize'] = isset($data['imageSize']) ? $data['imageSize'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['province'] = isset($data['province']) ? $data['province'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['district'] = isset($data['district']) ? $data['district'] : null;
        $this->container['detailAddress'] = isset($data['detailAddress']) ? $data['detailAddress'] : null;
        $this->container['fontList'] = isset($data['fontList']) ? $data['fontList'] : null;
        $this->container['fontScores'] = isset($data['fontScores']) ? $data['fontScores'] : null;
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
    * Gets words
    *  文字块识别结果。
    *
    * @return string|null
    */
    public function getWords()
    {
        return $this->container['words'];
    }

    /**
    * Sets words
    *
    * @param string|null $words 文字块识别结果。
    *
    * @return $this
    */
    public function setWords($words)
    {
        $this->container['words'] = $words;
        return $this;
    }

    /**
    * Gets confidence
    *  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @return float|null
    */
    public function getConfidence()
    {
        return $this->container['confidence'];
    }

    /**
    * Sets confidence
    *
    * @param float|null $confidence 相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @return $this
    */
    public function setConfidence($confidence)
    {
        $this->container['confidence'] = $confidence;
        return $this;
    }

    /**
    * Gets location
    *  文字块的区域位置信息，列表形式，包含文字区域四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @return int[][]|null
    */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
    * Sets location
    *
    * @param int[][]|null $location 文字块的区域位置信息，列表形式，包含文字区域四个顶点的二维坐标（x,y）;坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @return $this
    */
    public function setLocation($location)
    {
        $this->container['location'] = $location;
        return $this;
    }

    /**
    * Gets extractedData
    *  提取出的结构化JSON结果，该字典内的key值与入参列表extract_type的值一致，目前仅支持联系人信息提取，亦即key值为\"contact_info\"的字段。 若入参extract_type为空列表或该字段缺失时，不进行提取，此字段为空。
    *
    * @return object|null
    */
    public function getExtractedData()
    {
        return $this->container['extractedData'];
    }

    /**
    * Sets extractedData
    *
    * @param object|null $extractedData 提取出的结构化JSON结果，该字典内的key值与入参列表extract_type的值一致，目前仅支持联系人信息提取，亦即key值为\"contact_info\"的字段。 若入参extract_type为空列表或该字段缺失时，不进行提取，此字段为空。
    *
    * @return $this
    */
    public function setExtractedData($extractedData)
    {
        $this->container['extractedData'] = $extractedData;
        return $this;
    }

    /**
    * Gets contactInfo
    *  该字段表示提取的联系人信息，包括：姓名、联系电话、省市区以及详细地址。 若入参extract_type列表中无该字段，则此字段不存在。
    *
    * @return object|null
    */
    public function getContactInfo()
    {
        return $this->container['contactInfo'];
    }

    /**
    * Sets contactInfo
    *
    * @param object|null $contactInfo 该字段表示提取的联系人信息，包括：姓名、联系电话、省市区以及详细地址。 若入参extract_type列表中无该字段，则此字段不存在。
    *
    * @return $this
    */
    public function setContactInfo($contactInfo)
    {
        $this->container['contactInfo'] = $contactInfo;
        return $this;
    }

    /**
    * Gets imageSize
    *  该字段表示返回图片宽高信息。 如入参extract_type列表中无该字段，则此字段不存在。
    *
    * @return object|null
    */
    public function getImageSize()
    {
        return $this->container['imageSize'];
    }

    /**
    * Sets imageSize
    *
    * @param object|null $imageSize 该字段表示返回图片宽高信息。 如入参extract_type列表中无该字段，则此字段不存在。
    *
    * @return $this
    */
    public function setImageSize($imageSize)
    {
        $this->container['imageSize'] = $imageSize;
        return $this;
    }

    /**
    * Gets height
    *  传入image_size时的返回，为图像高度。
    *
    * @return int|null
    */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
    * Sets height
    *
    * @param int|null $height 传入image_size时的返回，为图像高度。
    *
    * @return $this
    */
    public function setHeight($height)
    {
        $this->container['height'] = $height;
        return $this;
    }

    /**
    * Gets width
    *  传入image_size时的返回，为图像宽度。
    *
    * @return int|null
    */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
    * Sets width
    *
    * @param int|null $width 传入image_size时的返回，为图像宽度。
    *
    * @return $this
    */
    public function setWidth($width)
    {
        $this->container['width'] = $width;
        return $this;
    }

    /**
    * Gets name
    *  传入contact_info时的返回，为姓名。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 传入contact_info时的返回，为姓名。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets phone
    *  传入contact_info时的返回，联系电话。
    *
    * @return string|null
    */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
    * Sets phone
    *
    * @param string|null $phone 传入contact_info时的返回，联系电话。
    *
    * @return $this
    */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;
        return $this;
    }

    /**
    * Gets province
    *  传入contact_info时的返回，省。
    *
    * @return string|null
    */
    public function getProvince()
    {
        return $this->container['province'];
    }

    /**
    * Sets province
    *
    * @param string|null $province 传入contact_info时的返回，省。
    *
    * @return $this
    */
    public function setProvince($province)
    {
        $this->container['province'] = $province;
        return $this;
    }

    /**
    * Gets city
    *  传入contact_info时的返回，市。
    *
    * @return string|null
    */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
    * Sets city
    *
    * @param string|null $city 传入contact_info时的返回，市。
    *
    * @return $this
    */
    public function setCity($city)
    {
        $this->container['city'] = $city;
        return $this;
    }

    /**
    * Gets district
    *  传入contact_info时的返回，县区。
    *
    * @return string|null
    */
    public function getDistrict()
    {
        return $this->container['district'];
    }

    /**
    * Sets district
    *
    * @param string|null $district 传入contact_info时的返回，县区。
    *
    * @return $this
    */
    public function setDistrict($district)
    {
        $this->container['district'] = $district;
        return $this;
    }

    /**
    * Gets detailAddress
    *  传入contact_info时的返回，详细地址（不含省市区）。
    *
    * @return string|null
    */
    public function getDetailAddress()
    {
        return $this->container['detailAddress'];
    }

    /**
    * Sets detailAddress
    *
    * @param string|null $detailAddress 传入contact_info时的返回，详细地址（不含省市区）。
    *
    * @return $this
    */
    public function setDetailAddress($detailAddress)
    {
        $this->container['detailAddress'] = $detailAddress;
        return $this;
    }

    /**
    * Gets fontList
    *  文字块所属字体类型，列表形式，表示与文字块的文字最接近的字体类型。
    *
    * @return string[]|null
    */
    public function getFontList()
    {
        return $this->container['fontList'];
    }

    /**
    * Sets fontList
    *
    * @param string[]|null $fontList 文字块所属字体类型，列表形式，表示与文字块的文字最接近的字体类型。
    *
    * @return $this
    */
    public function setFontList($fontList)
    {
        $this->container['fontList'] = $fontList;
        return $this;
    }

    /**
    * Gets fontScores
    *  文字块所属字体类型的概率，列表形式，与font_list一一对应，表示文字块的文字属于某种字体类型的概率。
    *
    * @return float[]|null
    */
    public function getFontScores()
    {
        return $this->container['fontScores'];
    }

    /**
    * Sets fontScores
    *
    * @param float[]|null $fontScores 文字块所属字体类型的概率，列表形式，与font_list一一对应，表示文字块的文字属于某种字体类型的概率。
    *
    * @return $this
    */
    public function setFontScores($fontScores)
    {
        $this->container['fontScores'] = $fontScores;
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

