<?php

namespace HuaweiCloud\SDK\Dsc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateDocWatermarkByAddressRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateDocWatermarkByAddressRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * regionId  项目所在region的id，如：xx-xx-1。
    * srcFile  待添加水印的文档地址，当前只支持华为云OBS对象，格式为 **obs://bucket/object** ，其中bucket为和当前项目处于同一区域的OBS桶名称，object为对象全路径名。例如：**obs://hwbucket/hwinfo/hw.png**，其中obs://表示OBS存储，hwbucket为桶名，hwinfo/hw.png为对象全路径名。
    * docType  待嵌入水印的文档类型。
    * dstFile  添加水印后的文档存放地址，格式和要求同src_file字段，不设置时，默认取src_file的值，即添加水印后覆盖原文件。
    * blindWatermark  暗文字水印内容，与“visible_watermark”字段至少有一个不为空
    * visibleWatermark  明文字水印内容，与暗水印“blind_watermark”字段至少有一个不为空。
    * imageMark  待嵌入的图形明水印文件的地址,  字段格式要求同src_file字段，图形文件的格式必须为“png”或“jpg”，否则返回参数错误；图像文件大小不超过1MB
    * visibleType  该字段控制明水印嵌入文字还是图片。默认为**TEXT**类型，需填写visible_watermark字段设置明文字水印； 当该字段为**IMAGE**时，需填写image_watermark字段设置水印图片地址此时 ，“visible_watermark”，“font_size”，“rotation”和“opacity”字段无效。
    * filePassword  待加水印文件有密码时，读取文件的密码， 最大支持长度256。如果Office文档有读密码或域控的权限密码，请输入读密码，或者有读权限的域控密码。
    * markedFilePassword  添加水印后给文件设置密码， 最大支持长度256。默认不加文档密码。
    * readonlyPassword  添加水印后给文件设置只读密码， 最大支持长度256。默认不加只读密码。
    * front  明水印字体大小，取值为[1,100]，默认值50
    * rotation  明水印旋转角度，逆时针方向，取值为[0,90]，默认值45。
    * opacity  明水印的透明度，取值[0,1]，默认值为0.3；
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'regionId' => 'string',
            'srcFile' => 'string',
            'docType' => 'string',
            'dstFile' => 'string',
            'blindWatermark' => 'string',
            'visibleWatermark' => 'string',
            'imageMark' => 'string',
            'visibleType' => 'string',
            'filePassword' => 'string',
            'markedFilePassword' => 'string',
            'readonlyPassword' => 'string',
            'front' => 'int',
            'rotation' => 'int',
            'opacity' => 'float'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * regionId  项目所在region的id，如：xx-xx-1。
    * srcFile  待添加水印的文档地址，当前只支持华为云OBS对象，格式为 **obs://bucket/object** ，其中bucket为和当前项目处于同一区域的OBS桶名称，object为对象全路径名。例如：**obs://hwbucket/hwinfo/hw.png**，其中obs://表示OBS存储，hwbucket为桶名，hwinfo/hw.png为对象全路径名。
    * docType  待嵌入水印的文档类型。
    * dstFile  添加水印后的文档存放地址，格式和要求同src_file字段，不设置时，默认取src_file的值，即添加水印后覆盖原文件。
    * blindWatermark  暗文字水印内容，与“visible_watermark”字段至少有一个不为空
    * visibleWatermark  明文字水印内容，与暗水印“blind_watermark”字段至少有一个不为空。
    * imageMark  待嵌入的图形明水印文件的地址,  字段格式要求同src_file字段，图形文件的格式必须为“png”或“jpg”，否则返回参数错误；图像文件大小不超过1MB
    * visibleType  该字段控制明水印嵌入文字还是图片。默认为**TEXT**类型，需填写visible_watermark字段设置明文字水印； 当该字段为**IMAGE**时，需填写image_watermark字段设置水印图片地址此时 ，“visible_watermark”，“font_size”，“rotation”和“opacity”字段无效。
    * filePassword  待加水印文件有密码时，读取文件的密码， 最大支持长度256。如果Office文档有读密码或域控的权限密码，请输入读密码，或者有读权限的域控密码。
    * markedFilePassword  添加水印后给文件设置密码， 最大支持长度256。默认不加文档密码。
    * readonlyPassword  添加水印后给文件设置只读密码， 最大支持长度256。默认不加只读密码。
    * front  明水印字体大小，取值为[1,100]，默认值50
    * rotation  明水印旋转角度，逆时针方向，取值为[0,90]，默认值45。
    * opacity  明水印的透明度，取值[0,1]，默认值为0.3；
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'regionId' => null,
        'srcFile' => null,
        'docType' => null,
        'dstFile' => null,
        'blindWatermark' => null,
        'visibleWatermark' => null,
        'imageMark' => null,
        'visibleType' => null,
        'filePassword' => null,
        'markedFilePassword' => null,
        'readonlyPassword' => null,
        'front' => 'int32',
        'rotation' => 'int32',
        'opacity' => 'float'
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
    * regionId  项目所在region的id，如：xx-xx-1。
    * srcFile  待添加水印的文档地址，当前只支持华为云OBS对象，格式为 **obs://bucket/object** ，其中bucket为和当前项目处于同一区域的OBS桶名称，object为对象全路径名。例如：**obs://hwbucket/hwinfo/hw.png**，其中obs://表示OBS存储，hwbucket为桶名，hwinfo/hw.png为对象全路径名。
    * docType  待嵌入水印的文档类型。
    * dstFile  添加水印后的文档存放地址，格式和要求同src_file字段，不设置时，默认取src_file的值，即添加水印后覆盖原文件。
    * blindWatermark  暗文字水印内容，与“visible_watermark”字段至少有一个不为空
    * visibleWatermark  明文字水印内容，与暗水印“blind_watermark”字段至少有一个不为空。
    * imageMark  待嵌入的图形明水印文件的地址,  字段格式要求同src_file字段，图形文件的格式必须为“png”或“jpg”，否则返回参数错误；图像文件大小不超过1MB
    * visibleType  该字段控制明水印嵌入文字还是图片。默认为**TEXT**类型，需填写visible_watermark字段设置明文字水印； 当该字段为**IMAGE**时，需填写image_watermark字段设置水印图片地址此时 ，“visible_watermark”，“font_size”，“rotation”和“opacity”字段无效。
    * filePassword  待加水印文件有密码时，读取文件的密码， 最大支持长度256。如果Office文档有读密码或域控的权限密码，请输入读密码，或者有读权限的域控密码。
    * markedFilePassword  添加水印后给文件设置密码， 最大支持长度256。默认不加文档密码。
    * readonlyPassword  添加水印后给文件设置只读密码， 最大支持长度256。默认不加只读密码。
    * front  明水印字体大小，取值为[1,100]，默认值50
    * rotation  明水印旋转角度，逆时针方向，取值为[0,90]，默认值45。
    * opacity  明水印的透明度，取值[0,1]，默认值为0.3；
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'regionId' => 'region_id',
            'srcFile' => 'src_file',
            'docType' => 'doc_type',
            'dstFile' => 'dst_file',
            'blindWatermark' => 'blind_watermark',
            'visibleWatermark' => 'visible_watermark',
            'imageMark' => 'image_mark',
            'visibleType' => 'visible_type',
            'filePassword' => 'file_password',
            'markedFilePassword' => 'marked_file_password',
            'readonlyPassword' => 'readonly_password',
            'front' => 'front',
            'rotation' => 'rotation',
            'opacity' => 'opacity'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * regionId  项目所在region的id，如：xx-xx-1。
    * srcFile  待添加水印的文档地址，当前只支持华为云OBS对象，格式为 **obs://bucket/object** ，其中bucket为和当前项目处于同一区域的OBS桶名称，object为对象全路径名。例如：**obs://hwbucket/hwinfo/hw.png**，其中obs://表示OBS存储，hwbucket为桶名，hwinfo/hw.png为对象全路径名。
    * docType  待嵌入水印的文档类型。
    * dstFile  添加水印后的文档存放地址，格式和要求同src_file字段，不设置时，默认取src_file的值，即添加水印后覆盖原文件。
    * blindWatermark  暗文字水印内容，与“visible_watermark”字段至少有一个不为空
    * visibleWatermark  明文字水印内容，与暗水印“blind_watermark”字段至少有一个不为空。
    * imageMark  待嵌入的图形明水印文件的地址,  字段格式要求同src_file字段，图形文件的格式必须为“png”或“jpg”，否则返回参数错误；图像文件大小不超过1MB
    * visibleType  该字段控制明水印嵌入文字还是图片。默认为**TEXT**类型，需填写visible_watermark字段设置明文字水印； 当该字段为**IMAGE**时，需填写image_watermark字段设置水印图片地址此时 ，“visible_watermark”，“font_size”，“rotation”和“opacity”字段无效。
    * filePassword  待加水印文件有密码时，读取文件的密码， 最大支持长度256。如果Office文档有读密码或域控的权限密码，请输入读密码，或者有读权限的域控密码。
    * markedFilePassword  添加水印后给文件设置密码， 最大支持长度256。默认不加文档密码。
    * readonlyPassword  添加水印后给文件设置只读密码， 最大支持长度256。默认不加只读密码。
    * front  明水印字体大小，取值为[1,100]，默认值50
    * rotation  明水印旋转角度，逆时针方向，取值为[0,90]，默认值45。
    * opacity  明水印的透明度，取值[0,1]，默认值为0.3；
    *
    * @var string[]
    */
    protected static $setters = [
            'regionId' => 'setRegionId',
            'srcFile' => 'setSrcFile',
            'docType' => 'setDocType',
            'dstFile' => 'setDstFile',
            'blindWatermark' => 'setBlindWatermark',
            'visibleWatermark' => 'setVisibleWatermark',
            'imageMark' => 'setImageMark',
            'visibleType' => 'setVisibleType',
            'filePassword' => 'setFilePassword',
            'markedFilePassword' => 'setMarkedFilePassword',
            'readonlyPassword' => 'setReadonlyPassword',
            'front' => 'setFront',
            'rotation' => 'setRotation',
            'opacity' => 'setOpacity'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * regionId  项目所在region的id，如：xx-xx-1。
    * srcFile  待添加水印的文档地址，当前只支持华为云OBS对象，格式为 **obs://bucket/object** ，其中bucket为和当前项目处于同一区域的OBS桶名称，object为对象全路径名。例如：**obs://hwbucket/hwinfo/hw.png**，其中obs://表示OBS存储，hwbucket为桶名，hwinfo/hw.png为对象全路径名。
    * docType  待嵌入水印的文档类型。
    * dstFile  添加水印后的文档存放地址，格式和要求同src_file字段，不设置时，默认取src_file的值，即添加水印后覆盖原文件。
    * blindWatermark  暗文字水印内容，与“visible_watermark”字段至少有一个不为空
    * visibleWatermark  明文字水印内容，与暗水印“blind_watermark”字段至少有一个不为空。
    * imageMark  待嵌入的图形明水印文件的地址,  字段格式要求同src_file字段，图形文件的格式必须为“png”或“jpg”，否则返回参数错误；图像文件大小不超过1MB
    * visibleType  该字段控制明水印嵌入文字还是图片。默认为**TEXT**类型，需填写visible_watermark字段设置明文字水印； 当该字段为**IMAGE**时，需填写image_watermark字段设置水印图片地址此时 ，“visible_watermark”，“font_size”，“rotation”和“opacity”字段无效。
    * filePassword  待加水印文件有密码时，读取文件的密码， 最大支持长度256。如果Office文档有读密码或域控的权限密码，请输入读密码，或者有读权限的域控密码。
    * markedFilePassword  添加水印后给文件设置密码， 最大支持长度256。默认不加文档密码。
    * readonlyPassword  添加水印后给文件设置只读密码， 最大支持长度256。默认不加只读密码。
    * front  明水印字体大小，取值为[1,100]，默认值50
    * rotation  明水印旋转角度，逆时针方向，取值为[0,90]，默认值45。
    * opacity  明水印的透明度，取值[0,1]，默认值为0.3；
    *
    * @var string[]
    */
    protected static $getters = [
            'regionId' => 'getRegionId',
            'srcFile' => 'getSrcFile',
            'docType' => 'getDocType',
            'dstFile' => 'getDstFile',
            'blindWatermark' => 'getBlindWatermark',
            'visibleWatermark' => 'getVisibleWatermark',
            'imageMark' => 'getImageMark',
            'visibleType' => 'getVisibleType',
            'filePassword' => 'getFilePassword',
            'markedFilePassword' => 'getMarkedFilePassword',
            'readonlyPassword' => 'getReadonlyPassword',
            'front' => 'getFront',
            'rotation' => 'getRotation',
            'opacity' => 'getOpacity'
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
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['srcFile'] = isset($data['srcFile']) ? $data['srcFile'] : null;
        $this->container['docType'] = isset($data['docType']) ? $data['docType'] : null;
        $this->container['dstFile'] = isset($data['dstFile']) ? $data['dstFile'] : null;
        $this->container['blindWatermark'] = isset($data['blindWatermark']) ? $data['blindWatermark'] : null;
        $this->container['visibleWatermark'] = isset($data['visibleWatermark']) ? $data['visibleWatermark'] : null;
        $this->container['imageMark'] = isset($data['imageMark']) ? $data['imageMark'] : null;
        $this->container['visibleType'] = isset($data['visibleType']) ? $data['visibleType'] : null;
        $this->container['filePassword'] = isset($data['filePassword']) ? $data['filePassword'] : null;
        $this->container['markedFilePassword'] = isset($data['markedFilePassword']) ? $data['markedFilePassword'] : null;
        $this->container['readonlyPassword'] = isset($data['readonlyPassword']) ? $data['readonlyPassword'] : null;
        $this->container['front'] = isset($data['front']) ? $data['front'] : null;
        $this->container['rotation'] = isset($data['rotation']) ? $data['rotation'] : null;
        $this->container['opacity'] = isset($data['opacity']) ? $data['opacity'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['regionId'] === null) {
            $invalidProperties[] = "'regionId' can't be null";
        }
        if ($this->container['srcFile'] === null) {
            $invalidProperties[] = "'srcFile' can't be null";
        }
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

            $allowedValues = $this->getVisibleTypeAllowableValues();
                if (!is_null($this->container['visibleType']) && !in_array($this->container['visibleType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'visibleType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['filePassword']) && (mb_strlen($this->container['filePassword']) > 256)) {
                $invalidProperties[] = "invalid value for 'filePassword', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['filePassword']) && (mb_strlen($this->container['filePassword']) < 0)) {
                $invalidProperties[] = "invalid value for 'filePassword', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['markedFilePassword']) && (mb_strlen($this->container['markedFilePassword']) > 256)) {
                $invalidProperties[] = "invalid value for 'markedFilePassword', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['markedFilePassword']) && (mb_strlen($this->container['markedFilePassword']) < 0)) {
                $invalidProperties[] = "invalid value for 'markedFilePassword', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['readonlyPassword']) && (mb_strlen($this->container['readonlyPassword']) > 256)) {
                $invalidProperties[] = "invalid value for 'readonlyPassword', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['readonlyPassword']) && (mb_strlen($this->container['readonlyPassword']) < 0)) {
                $invalidProperties[] = "invalid value for 'readonlyPassword', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['front']) && ($this->container['front'] > 100)) {
                $invalidProperties[] = "invalid value for 'front', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['front']) && ($this->container['front'] < 1)) {
                $invalidProperties[] = "invalid value for 'front', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['rotation']) && ($this->container['rotation'] > 90)) {
                $invalidProperties[] = "invalid value for 'rotation', must be smaller than or equal to 90.";
            }
            if (!is_null($this->container['rotation']) && ($this->container['rotation'] < 0)) {
                $invalidProperties[] = "invalid value for 'rotation', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['opacity']) && ($this->container['opacity'] > 1)) {
                $invalidProperties[] = "invalid value for 'opacity', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['opacity']) && ($this->container['opacity'] < 0)) {
                $invalidProperties[] = "invalid value for 'opacity', must be bigger than or equal to 0.";
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
    * Gets regionId
    *  项目所在region的id，如：xx-xx-1。
    *
    * @return string
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string $regionId 项目所在region的id，如：xx-xx-1。
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets srcFile
    *  待添加水印的文档地址，当前只支持华为云OBS对象，格式为 **obs://bucket/object** ，其中bucket为和当前项目处于同一区域的OBS桶名称，object为对象全路径名。例如：**obs://hwbucket/hwinfo/hw.png**，其中obs://表示OBS存储，hwbucket为桶名，hwinfo/hw.png为对象全路径名。
    *
    * @return string
    */
    public function getSrcFile()
    {
        return $this->container['srcFile'];
    }

    /**
    * Sets srcFile
    *
    * @param string $srcFile 待添加水印的文档地址，当前只支持华为云OBS对象，格式为 **obs://bucket/object** ，其中bucket为和当前项目处于同一区域的OBS桶名称，object为对象全路径名。例如：**obs://hwbucket/hwinfo/hw.png**，其中obs://表示OBS存储，hwbucket为桶名，hwinfo/hw.png为对象全路径名。
    *
    * @return $this
    */
    public function setSrcFile($srcFile)
    {
        $this->container['srcFile'] = $srcFile;
        return $this;
    }

    /**
    * Gets docType
    *  待嵌入水印的文档类型。
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
    * @param string $docType 待嵌入水印的文档类型。
    *
    * @return $this
    */
    public function setDocType($docType)
    {
        $this->container['docType'] = $docType;
        return $this;
    }

    /**
    * Gets dstFile
    *  添加水印后的文档存放地址，格式和要求同src_file字段，不设置时，默认取src_file的值，即添加水印后覆盖原文件。
    *
    * @return string|null
    */
    public function getDstFile()
    {
        return $this->container['dstFile'];
    }

    /**
    * Sets dstFile
    *
    * @param string|null $dstFile 添加水印后的文档存放地址，格式和要求同src_file字段，不设置时，默认取src_file的值，即添加水印后覆盖原文件。
    *
    * @return $this
    */
    public function setDstFile($dstFile)
    {
        $this->container['dstFile'] = $dstFile;
        return $this;
    }

    /**
    * Gets blindWatermark
    *  暗文字水印内容，与“visible_watermark”字段至少有一个不为空
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
    * @param string|null $blindWatermark 暗文字水印内容，与“visible_watermark”字段至少有一个不为空
    *
    * @return $this
    */
    public function setBlindWatermark($blindWatermark)
    {
        $this->container['blindWatermark'] = $blindWatermark;
        return $this;
    }

    /**
    * Gets visibleWatermark
    *  明文字水印内容，与暗水印“blind_watermark”字段至少有一个不为空。
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
    * @param string|null $visibleWatermark 明文字水印内容，与暗水印“blind_watermark”字段至少有一个不为空。
    *
    * @return $this
    */
    public function setVisibleWatermark($visibleWatermark)
    {
        $this->container['visibleWatermark'] = $visibleWatermark;
        return $this;
    }

    /**
    * Gets imageMark
    *  待嵌入的图形明水印文件的地址,  字段格式要求同src_file字段，图形文件的格式必须为“png”或“jpg”，否则返回参数错误；图像文件大小不超过1MB
    *
    * @return string|null
    */
    public function getImageMark()
    {
        return $this->container['imageMark'];
    }

    /**
    * Sets imageMark
    *
    * @param string|null $imageMark 待嵌入的图形明水印文件的地址,  字段格式要求同src_file字段，图形文件的格式必须为“png”或“jpg”，否则返回参数错误；图像文件大小不超过1MB
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
    *  该字段控制明水印嵌入文字还是图片。默认为**TEXT**类型，需填写visible_watermark字段设置明文字水印； 当该字段为**IMAGE**时，需填写image_watermark字段设置水印图片地址此时 ，“visible_watermark”，“font_size”，“rotation”和“opacity”字段无效。
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
    * @param string|null $visibleType 该字段控制明水印嵌入文字还是图片。默认为**TEXT**类型，需填写visible_watermark字段设置明文字水印； 当该字段为**IMAGE**时，需填写image_watermark字段设置水印图片地址此时 ，“visible_watermark”，“font_size”，“rotation”和“opacity”字段无效。
    *
    * @return $this
    */
    public function setVisibleType($visibleType)
    {
        $this->container['visibleType'] = $visibleType;
        return $this;
    }

    /**
    * Gets filePassword
    *  待加水印文件有密码时，读取文件的密码， 最大支持长度256。如果Office文档有读密码或域控的权限密码，请输入读密码，或者有读权限的域控密码。
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
    * @param string|null $filePassword 待加水印文件有密码时，读取文件的密码， 最大支持长度256。如果Office文档有读密码或域控的权限密码，请输入读密码，或者有读权限的域控密码。
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
    * Gets front
    *  明水印字体大小，取值为[1,100]，默认值50
    *
    * @return int|null
    */
    public function getFront()
    {
        return $this->container['front'];
    }

    /**
    * Sets front
    *
    * @param int|null $front 明水印字体大小，取值为[1,100]，默认值50
    *
    * @return $this
    */
    public function setFront($front)
    {
        $this->container['front'] = $front;
        return $this;
    }

    /**
    * Gets rotation
    *  明水印旋转角度，逆时针方向，取值为[0,90]，默认值45。
    *
    * @return int|null
    */
    public function getRotation()
    {
        return $this->container['rotation'];
    }

    /**
    * Sets rotation
    *
    * @param int|null $rotation 明水印旋转角度，逆时针方向，取值为[0,90]，默认值45。
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
    * @return float|null
    */
    public function getOpacity()
    {
        return $this->container['opacity'];
    }

    /**
    * Sets opacity
    *
    * @param float|null $opacity 明水印的透明度，取值[0,1]，默认值为0.3；
    *
    * @return $this
    */
    public function setOpacity($opacity)
    {
        $this->container['opacity'] = $opacity;
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

