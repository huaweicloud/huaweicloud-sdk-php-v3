<?php

namespace HuaweiCloud\SDK\Dsc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateDocWatermarkRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateDocWatermarkRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * docType  要嵌入水印的文档类型
    * filePassword  输入文件有密码时，读取文件的密码， 最大支持长度256。如果Office文档有读密码或域控的权限密码，请输入读密码，或者有读权限的域控密码。
    * markedFilePassword  添加水印后给文件设置密码， 最大支持长度256。默认不加文档密码。
    * readonlyPassword  添加水印后给文件设置只读密码， 最大支持长度256。默认不加只读密码。
    * visibleWatermark  明水印内容，与“blind_watermark”字段至少有一个不为空
    * fontSize  明水印字体大小，取值为[1,100]，默认值50
    * rotation  明水印旋转角度，逆时针方向，取值为[0,90]，默认值45
    * opacity  明水印的透明度，取值[0,1]，默认值为0.3；
    * blindWatermark  暗水印内容，与“visible_watermark”字段至少有一个不为空
    * file  要添加水印的文档
    * imageMark  图形水印的字节流。图形文件的格式必须为“png”或“jpg”，否则返回参数错误；图像文件大小不超过1MB；在分段的请求体“Content-Disposition”部分，参数“name”的值必须为“image_mark”。
    * visibleType  该字段为空时，默认为**TEXT**类型。  当该字段为**IMAGE**时: - 请求的表单中必须包含名为“image”的图像文件，图像格式必须为“png”或“jpg”，否则返回参数错误； - 图像文件大小不超过1MB； - “visible_watermark”，“font_size”，“rotation”和“opacity”字段无效。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'docType' => 'string',
            'filePassword' => 'string',
            'markedFilePassword' => 'string',
            'readonlyPassword' => 'string',
            'visibleWatermark' => 'string',
            'fontSize' => 'string',
            'rotation' => 'string',
            'opacity' => 'string',
            'blindWatermark' => 'string',
            'file' => '\SplFileObject',
            'imageMark' => '\SplFileObject',
            'visibleType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * docType  要嵌入水印的文档类型
    * filePassword  输入文件有密码时，读取文件的密码， 最大支持长度256。如果Office文档有读密码或域控的权限密码，请输入读密码，或者有读权限的域控密码。
    * markedFilePassword  添加水印后给文件设置密码， 最大支持长度256。默认不加文档密码。
    * readonlyPassword  添加水印后给文件设置只读密码， 最大支持长度256。默认不加只读密码。
    * visibleWatermark  明水印内容，与“blind_watermark”字段至少有一个不为空
    * fontSize  明水印字体大小，取值为[1,100]，默认值50
    * rotation  明水印旋转角度，逆时针方向，取值为[0,90]，默认值45
    * opacity  明水印的透明度，取值[0,1]，默认值为0.3；
    * blindWatermark  暗水印内容，与“visible_watermark”字段至少有一个不为空
    * file  要添加水印的文档
    * imageMark  图形水印的字节流。图形文件的格式必须为“png”或“jpg”，否则返回参数错误；图像文件大小不超过1MB；在分段的请求体“Content-Disposition”部分，参数“name”的值必须为“image_mark”。
    * visibleType  该字段为空时，默认为**TEXT**类型。  当该字段为**IMAGE**时: - 请求的表单中必须包含名为“image”的图像文件，图像格式必须为“png”或“jpg”，否则返回参数错误； - 图像文件大小不超过1MB； - “visible_watermark”，“font_size”，“rotation”和“opacity”字段无效。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'docType' => null,
        'filePassword' => null,
        'markedFilePassword' => null,
        'readonlyPassword' => null,
        'visibleWatermark' => null,
        'fontSize' => null,
        'rotation' => null,
        'opacity' => null,
        'blindWatermark' => null,
        'file' => 'binary',
        'imageMark' => 'binary',
        'visibleType' => null
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
    * docType  要嵌入水印的文档类型
    * filePassword  输入文件有密码时，读取文件的密码， 最大支持长度256。如果Office文档有读密码或域控的权限密码，请输入读密码，或者有读权限的域控密码。
    * markedFilePassword  添加水印后给文件设置密码， 最大支持长度256。默认不加文档密码。
    * readonlyPassword  添加水印后给文件设置只读密码， 最大支持长度256。默认不加只读密码。
    * visibleWatermark  明水印内容，与“blind_watermark”字段至少有一个不为空
    * fontSize  明水印字体大小，取值为[1,100]，默认值50
    * rotation  明水印旋转角度，逆时针方向，取值为[0,90]，默认值45
    * opacity  明水印的透明度，取值[0,1]，默认值为0.3；
    * blindWatermark  暗水印内容，与“visible_watermark”字段至少有一个不为空
    * file  要添加水印的文档
    * imageMark  图形水印的字节流。图形文件的格式必须为“png”或“jpg”，否则返回参数错误；图像文件大小不超过1MB；在分段的请求体“Content-Disposition”部分，参数“name”的值必须为“image_mark”。
    * visibleType  该字段为空时，默认为**TEXT**类型。  当该字段为**IMAGE**时: - 请求的表单中必须包含名为“image”的图像文件，图像格式必须为“png”或“jpg”，否则返回参数错误； - 图像文件大小不超过1MB； - “visible_watermark”，“font_size”，“rotation”和“opacity”字段无效。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'docType' => 'doc_type',
            'filePassword' => 'file_password',
            'markedFilePassword' => 'marked_file_password',
            'readonlyPassword' => 'readonly_password',
            'visibleWatermark' => 'visible_watermark',
            'fontSize' => 'font_size',
            'rotation' => 'rotation',
            'opacity' => 'opacity',
            'blindWatermark' => 'blind_watermark',
            'file' => 'file',
            'imageMark' => 'image_mark',
            'visibleType' => 'visible_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * docType  要嵌入水印的文档类型
    * filePassword  输入文件有密码时，读取文件的密码， 最大支持长度256。如果Office文档有读密码或域控的权限密码，请输入读密码，或者有读权限的域控密码。
    * markedFilePassword  添加水印后给文件设置密码， 最大支持长度256。默认不加文档密码。
    * readonlyPassword  添加水印后给文件设置只读密码， 最大支持长度256。默认不加只读密码。
    * visibleWatermark  明水印内容，与“blind_watermark”字段至少有一个不为空
    * fontSize  明水印字体大小，取值为[1,100]，默认值50
    * rotation  明水印旋转角度，逆时针方向，取值为[0,90]，默认值45
    * opacity  明水印的透明度，取值[0,1]，默认值为0.3；
    * blindWatermark  暗水印内容，与“visible_watermark”字段至少有一个不为空
    * file  要添加水印的文档
    * imageMark  图形水印的字节流。图形文件的格式必须为“png”或“jpg”，否则返回参数错误；图像文件大小不超过1MB；在分段的请求体“Content-Disposition”部分，参数“name”的值必须为“image_mark”。
    * visibleType  该字段为空时，默认为**TEXT**类型。  当该字段为**IMAGE**时: - 请求的表单中必须包含名为“image”的图像文件，图像格式必须为“png”或“jpg”，否则返回参数错误； - 图像文件大小不超过1MB； - “visible_watermark”，“font_size”，“rotation”和“opacity”字段无效。
    *
    * @var string[]
    */
    protected static $setters = [
            'docType' => 'setDocType',
            'filePassword' => 'setFilePassword',
            'markedFilePassword' => 'setMarkedFilePassword',
            'readonlyPassword' => 'setReadonlyPassword',
            'visibleWatermark' => 'setVisibleWatermark',
            'fontSize' => 'setFontSize',
            'rotation' => 'setRotation',
            'opacity' => 'setOpacity',
            'blindWatermark' => 'setBlindWatermark',
            'file' => 'setFile',
            'imageMark' => 'setImageMark',
            'visibleType' => 'setVisibleType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * docType  要嵌入水印的文档类型
    * filePassword  输入文件有密码时，读取文件的密码， 最大支持长度256。如果Office文档有读密码或域控的权限密码，请输入读密码，或者有读权限的域控密码。
    * markedFilePassword  添加水印后给文件设置密码， 最大支持长度256。默认不加文档密码。
    * readonlyPassword  添加水印后给文件设置只读密码， 最大支持长度256。默认不加只读密码。
    * visibleWatermark  明水印内容，与“blind_watermark”字段至少有一个不为空
    * fontSize  明水印字体大小，取值为[1,100]，默认值50
    * rotation  明水印旋转角度，逆时针方向，取值为[0,90]，默认值45
    * opacity  明水印的透明度，取值[0,1]，默认值为0.3；
    * blindWatermark  暗水印内容，与“visible_watermark”字段至少有一个不为空
    * file  要添加水印的文档
    * imageMark  图形水印的字节流。图形文件的格式必须为“png”或“jpg”，否则返回参数错误；图像文件大小不超过1MB；在分段的请求体“Content-Disposition”部分，参数“name”的值必须为“image_mark”。
    * visibleType  该字段为空时，默认为**TEXT**类型。  当该字段为**IMAGE**时: - 请求的表单中必须包含名为“image”的图像文件，图像格式必须为“png”或“jpg”，否则返回参数错误； - 图像文件大小不超过1MB； - “visible_watermark”，“font_size”，“rotation”和“opacity”字段无效。
    *
    * @var string[]
    */
    protected static $getters = [
            'docType' => 'getDocType',
            'filePassword' => 'getFilePassword',
            'markedFilePassword' => 'getMarkedFilePassword',
            'readonlyPassword' => 'getReadonlyPassword',
            'visibleWatermark' => 'getVisibleWatermark',
            'fontSize' => 'getFontSize',
            'rotation' => 'getRotation',
            'opacity' => 'getOpacity',
            'blindWatermark' => 'getBlindWatermark',
            'file' => 'getFile',
            'imageMark' => 'getImageMark',
            'visibleType' => 'getVisibleType'
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
    const DOC_TYPE_WORD = 'WORD';
    const DOC_TYPE_EXCEL = 'EXCEL';
    const DOC_TYPE_PDF = 'PDF';
    const DOC_TYPE_PPT = 'PPT';
    const VISIBLE_TYPE_TEXT = 'TEXT';
    const VISIBLE_TYPE_IMAGE = 'IMAGE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDocTypeAllowableValues()
    {
        return [
            self::DOC_TYPE_WORD,
            self::DOC_TYPE_EXCEL,
            self::DOC_TYPE_PDF,
            self::DOC_TYPE_PPT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getVisibleTypeAllowableValues()
    {
        return [
            self::VISIBLE_TYPE_TEXT,
            self::VISIBLE_TYPE_IMAGE,
        ];
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
        $this->container['docType'] = isset($data['docType']) ? $data['docType'] : null;
        $this->container['filePassword'] = isset($data['filePassword']) ? $data['filePassword'] : null;
        $this->container['markedFilePassword'] = isset($data['markedFilePassword']) ? $data['markedFilePassword'] : null;
        $this->container['readonlyPassword'] = isset($data['readonlyPassword']) ? $data['readonlyPassword'] : null;
        $this->container['visibleWatermark'] = isset($data['visibleWatermark']) ? $data['visibleWatermark'] : null;
        $this->container['fontSize'] = isset($data['fontSize']) ? $data['fontSize'] : null;
        $this->container['rotation'] = isset($data['rotation']) ? $data['rotation'] : null;
        $this->container['opacity'] = isset($data['opacity']) ? $data['opacity'] : null;
        $this->container['blindWatermark'] = isset($data['blindWatermark']) ? $data['blindWatermark'] : null;
        $this->container['file'] = isset($data['file']) ? $data['file'] : null;
        $this->container['imageMark'] = isset($data['imageMark']) ? $data['imageMark'] : null;
        $this->container['visibleType'] = isset($data['visibleType']) ? $data['visibleType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['docType'] === null) {
            $invalidProperties[] = "'docType' can't be null";
        }
            $allowedValues = $this->getDocTypeAllowableValues();
                if (!is_null($this->container['docType']) && !in_array($this->container['docType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'docType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['filePassword']) && (mb_strlen($this->container['filePassword']) > 256)) {
                $invalidProperties[] = "invalid value for 'filePassword', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['filePassword']) && (mb_strlen($this->container['filePassword']) < 0)) {
                $invalidProperties[] = "invalid value for 'filePassword', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['visibleWatermark']) && (mb_strlen($this->container['visibleWatermark']) > 256)) {
                $invalidProperties[] = "invalid value for 'visibleWatermark', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['visibleWatermark']) && (mb_strlen($this->container['visibleWatermark']) < 0)) {
                $invalidProperties[] = "invalid value for 'visibleWatermark', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fontSize']) && (mb_strlen($this->container['fontSize']) > 100)) {
                $invalidProperties[] = "invalid value for 'fontSize', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['fontSize']) && (mb_strlen($this->container['fontSize']) < 1)) {
                $invalidProperties[] = "invalid value for 'fontSize', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['rotation']) && (mb_strlen($this->container['rotation']) > 90)) {
                $invalidProperties[] = "invalid value for 'rotation', the character length must be smaller than or equal to 90.";
            }
            if (!is_null($this->container['rotation']) && (mb_strlen($this->container['rotation']) < 0)) {
                $invalidProperties[] = "invalid value for 'rotation', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['opacity']) && (mb_strlen($this->container['opacity']) > 8)) {
                $invalidProperties[] = "invalid value for 'opacity', the character length must be smaller than or equal to 8.";
            }
            if (!is_null($this->container['opacity']) && (mb_strlen($this->container['opacity']) < 0)) {
                $invalidProperties[] = "invalid value for 'opacity', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['blindWatermark']) && (mb_strlen($this->container['blindWatermark']) > 256)) {
                $invalidProperties[] = "invalid value for 'blindWatermark', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['blindWatermark']) && (mb_strlen($this->container['blindWatermark']) < 0)) {
                $invalidProperties[] = "invalid value for 'blindWatermark', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['file'] === null) {
            $invalidProperties[] = "'file' can't be null";
        }
            $allowedValues = $this->getVisibleTypeAllowableValues();
                if (!is_null($this->container['visibleType']) && !in_array($this->container['visibleType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'visibleType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

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
    * Gets docType
    *  要嵌入水印的文档类型
    *
    * @return string
    */
    public function getDocType()
    {
        return $this->container['docType'];
    }

    /**
    * Sets docType
    *
    * @param string $docType 要嵌入水印的文档类型
    *
    * @return $this
    */
    public function setDocType($docType)
    {
        $this->container['docType'] = $docType;
        return $this;
    }

    /**
    * Gets filePassword
    *  输入文件有密码时，读取文件的密码， 最大支持长度256。如果Office文档有读密码或域控的权限密码，请输入读密码，或者有读权限的域控密码。
    *
    * @return string|null
    */
    public function getFilePassword()
    {
        return $this->container['filePassword'];
    }

    /**
    * Sets filePassword
    *
    * @param string|null $filePassword 输入文件有密码时，读取文件的密码， 最大支持长度256。如果Office文档有读密码或域控的权限密码，请输入读密码，或者有读权限的域控密码。
    *
    * @return $this
    */
    public function setFilePassword($filePassword)
    {
        $this->container['filePassword'] = $filePassword;
        return $this;
    }

    /**
    * Gets markedFilePassword
    *  添加水印后给文件设置密码， 最大支持长度256。默认不加文档密码。
    *
    * @return string|null
    */
    public function getMarkedFilePassword()
    {
        return $this->container['markedFilePassword'];
    }

    /**
    * Sets markedFilePassword
    *
    * @param string|null $markedFilePassword 添加水印后给文件设置密码， 最大支持长度256。默认不加文档密码。
    *
    * @return $this
    */
    public function setMarkedFilePassword($markedFilePassword)
    {
        $this->container['markedFilePassword'] = $markedFilePassword;
        return $this;
    }

    /**
    * Gets readonlyPassword
    *  添加水印后给文件设置只读密码， 最大支持长度256。默认不加只读密码。
    *
    * @return string|null
    */
    public function getReadonlyPassword()
    {
        return $this->container['readonlyPassword'];
    }

    /**
    * Sets readonlyPassword
    *
    * @param string|null $readonlyPassword 添加水印后给文件设置只读密码， 最大支持长度256。默认不加只读密码。
    *
    * @return $this
    */
    public function setReadonlyPassword($readonlyPassword)
    {
        $this->container['readonlyPassword'] = $readonlyPassword;
        return $this;
    }

    /**
    * Gets visibleWatermark
    *  明水印内容，与“blind_watermark”字段至少有一个不为空
    *
    * @return string|null
    */
    public function getVisibleWatermark()
    {
        return $this->container['visibleWatermark'];
    }

    /**
    * Sets visibleWatermark
    *
    * @param string|null $visibleWatermark 明水印内容，与“blind_watermark”字段至少有一个不为空
    *
    * @return $this
    */
    public function setVisibleWatermark($visibleWatermark)
    {
        $this->container['visibleWatermark'] = $visibleWatermark;
        return $this;
    }

    /**
    * Gets fontSize
    *  明水印字体大小，取值为[1,100]，默认值50
    *
    * @return string|null
    */
    public function getFontSize()
    {
        return $this->container['fontSize'];
    }

    /**
    * Sets fontSize
    *
    * @param string|null $fontSize 明水印字体大小，取值为[1,100]，默认值50
    *
    * @return $this
    */
    public function setFontSize($fontSize)
    {
        $this->container['fontSize'] = $fontSize;
        return $this;
    }

    /**
    * Gets rotation
    *  明水印旋转角度，逆时针方向，取值为[0,90]，默认值45
    *
    * @return string|null
    */
    public function getRotation()
    {
        return $this->container['rotation'];
    }

    /**
    * Sets rotation
    *
    * @param string|null $rotation 明水印旋转角度，逆时针方向，取值为[0,90]，默认值45
    *
    * @return $this
    */
    public function setRotation($rotation)
    {
        $this->container['rotation'] = $rotation;
        return $this;
    }

    /**
    * Gets opacity
    *  明水印的透明度，取值[0,1]，默认值为0.3；
    *
    * @return string|null
    */
    public function getOpacity()
    {
        return $this->container['opacity'];
    }

    /**
    * Sets opacity
    *
    * @param string|null $opacity 明水印的透明度，取值[0,1]，默认值为0.3；
    *
    * @return $this
    */
    public function setOpacity($opacity)
    {
        $this->container['opacity'] = $opacity;
        return $this;
    }

    /**
    * Gets blindWatermark
    *  暗水印内容，与“visible_watermark”字段至少有一个不为空
    *
    * @return string|null
    */
    public function getBlindWatermark()
    {
        return $this->container['blindWatermark'];
    }

    /**
    * Sets blindWatermark
    *
    * @param string|null $blindWatermark 暗水印内容，与“visible_watermark”字段至少有一个不为空
    *
    * @return $this
    */
    public function setBlindWatermark($blindWatermark)
    {
        $this->container['blindWatermark'] = $blindWatermark;
        return $this;
    }

    /**
    * Gets file
    *  要添加水印的文档
    *
    * @return \SplFileObject
    */
    public function getFile()
    {
        return $this->container['file'];
    }

    /**
    * Sets file
    *
    * @param \SplFileObject $file 要添加水印的文档
    *
    * @return $this
    */
    public function setFile($file)
    {
        $this->container['file'] = $file;
        return $this;
    }

    /**
    * Gets imageMark
    *  图形水印的字节流。图形文件的格式必须为“png”或“jpg”，否则返回参数错误；图像文件大小不超过1MB；在分段的请求体“Content-Disposition”部分，参数“name”的值必须为“image_mark”。
    *
    * @return \SplFileObject|null
    */
    public function getImageMark()
    {
        return $this->container['imageMark'];
    }

    /**
    * Sets imageMark
    *
    * @param \SplFileObject|null $imageMark 图形水印的字节流。图形文件的格式必须为“png”或“jpg”，否则返回参数错误；图像文件大小不超过1MB；在分段的请求体“Content-Disposition”部分，参数“name”的值必须为“image_mark”。
    *
    * @return $this
    */
    public function setImageMark($imageMark)
    {
        $this->container['imageMark'] = $imageMark;
        return $this;
    }

    /**
    * Gets visibleType
    *  该字段为空时，默认为**TEXT**类型。  当该字段为**IMAGE**时: - 请求的表单中必须包含名为“image”的图像文件，图像格式必须为“png”或“jpg”，否则返回参数错误； - 图像文件大小不超过1MB； - “visible_watermark”，“font_size”，“rotation”和“opacity”字段无效。
    *
    * @return string|null
    */
    public function getVisibleType()
    {
        return $this->container['visibleType'];
    }

    /**
    * Sets visibleType
    *
    * @param string|null $visibleType 该字段为空时，默认为**TEXT**类型。  当该字段为**IMAGE**时: - 请求的表单中必须包含名为“image”的图像文件，图像格式必须为“png”或“jpg”，否则返回参数错误； - 图像文件大小不超过1MB； - “visible_watermark”，“font_size”，“rotation”和“opacity”字段无效。
    *
    * @return $this
    */
    public function setVisibleType($visibleType)
    {
        $this->container['visibleType'] = $visibleType;
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

