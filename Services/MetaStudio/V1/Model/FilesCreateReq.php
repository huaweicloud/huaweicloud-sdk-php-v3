<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FilesCreateReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FilesCreateReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fileName  文件名，不区分大小写，最大长度256，最小长度1。
    * fileMd5  文件内容MD5值，MD5值需要进行Base64编码。
    * fileSize  文件总的大小，最小1，最大5368709120。
    * fileType  文件类型（默认提取文件后缀）。
    * assetId  资产ID。
    * assetFileCategory  文件在资产中的分类。每种资产类型包含的文件分类不同。 * MAIN：主文件 * COVER：封面文件 * PAGE：内容页图片 * SAMPLE：样例音频 * OTHER：其他文件 * WHOLE_MODEL：全模型 * USER_MODIFIED_MODEL：用户上传模型 > * 资产类型为SCENE、ANIMATION、VIDEO、IMAGE、MATERIAL时，包含MAIN、COVER和OTHER > * 资产类型为PPT时，包含MAIN、COVER、PAGE和OTHER > * 资产类型为HUMAN_MODEL时，包含MAIN、COVER、WHOLE_MODEL、USER_MODIFIED_MODEL和OTHER > * 资产类型为VOICE_MODEL时，包含MAIN、SAMPLE(样例音频文件)和OTHER > * 资产类型为HUMAN_MODEL_2D时，包含MAIN、COVER、SAMPLE(动作样例)和OTHER(遮罩文件) > * 资产类型为BUSINESS_CARD_TEMPLET时，包含MAIN和COVER(名片效果图)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fileName' => 'string',
            'fileMd5' => 'string',
            'fileSize' => 'int',
            'fileType' => 'string',
            'assetId' => 'string',
            'assetFileCategory' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fileName  文件名，不区分大小写，最大长度256，最小长度1。
    * fileMd5  文件内容MD5值，MD5值需要进行Base64编码。
    * fileSize  文件总的大小，最小1，最大5368709120。
    * fileType  文件类型（默认提取文件后缀）。
    * assetId  资产ID。
    * assetFileCategory  文件在资产中的分类。每种资产类型包含的文件分类不同。 * MAIN：主文件 * COVER：封面文件 * PAGE：内容页图片 * SAMPLE：样例音频 * OTHER：其他文件 * WHOLE_MODEL：全模型 * USER_MODIFIED_MODEL：用户上传模型 > * 资产类型为SCENE、ANIMATION、VIDEO、IMAGE、MATERIAL时，包含MAIN、COVER和OTHER > * 资产类型为PPT时，包含MAIN、COVER、PAGE和OTHER > * 资产类型为HUMAN_MODEL时，包含MAIN、COVER、WHOLE_MODEL、USER_MODIFIED_MODEL和OTHER > * 资产类型为VOICE_MODEL时，包含MAIN、SAMPLE(样例音频文件)和OTHER > * 资产类型为HUMAN_MODEL_2D时，包含MAIN、COVER、SAMPLE(动作样例)和OTHER(遮罩文件) > * 资产类型为BUSINESS_CARD_TEMPLET时，包含MAIN和COVER(名片效果图)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fileName' => null,
        'fileMd5' => null,
        'fileSize' => 'int64',
        'fileType' => null,
        'assetId' => null,
        'assetFileCategory' => null
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
    * fileName  文件名，不区分大小写，最大长度256，最小长度1。
    * fileMd5  文件内容MD5值，MD5值需要进行Base64编码。
    * fileSize  文件总的大小，最小1，最大5368709120。
    * fileType  文件类型（默认提取文件后缀）。
    * assetId  资产ID。
    * assetFileCategory  文件在资产中的分类。每种资产类型包含的文件分类不同。 * MAIN：主文件 * COVER：封面文件 * PAGE：内容页图片 * SAMPLE：样例音频 * OTHER：其他文件 * WHOLE_MODEL：全模型 * USER_MODIFIED_MODEL：用户上传模型 > * 资产类型为SCENE、ANIMATION、VIDEO、IMAGE、MATERIAL时，包含MAIN、COVER和OTHER > * 资产类型为PPT时，包含MAIN、COVER、PAGE和OTHER > * 资产类型为HUMAN_MODEL时，包含MAIN、COVER、WHOLE_MODEL、USER_MODIFIED_MODEL和OTHER > * 资产类型为VOICE_MODEL时，包含MAIN、SAMPLE(样例音频文件)和OTHER > * 资产类型为HUMAN_MODEL_2D时，包含MAIN、COVER、SAMPLE(动作样例)和OTHER(遮罩文件) > * 资产类型为BUSINESS_CARD_TEMPLET时，包含MAIN和COVER(名片效果图)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fileName' => 'file_name',
            'fileMd5' => 'file_md5',
            'fileSize' => 'file_size',
            'fileType' => 'file_type',
            'assetId' => 'asset_id',
            'assetFileCategory' => 'asset_file_category'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fileName  文件名，不区分大小写，最大长度256，最小长度1。
    * fileMd5  文件内容MD5值，MD5值需要进行Base64编码。
    * fileSize  文件总的大小，最小1，最大5368709120。
    * fileType  文件类型（默认提取文件后缀）。
    * assetId  资产ID。
    * assetFileCategory  文件在资产中的分类。每种资产类型包含的文件分类不同。 * MAIN：主文件 * COVER：封面文件 * PAGE：内容页图片 * SAMPLE：样例音频 * OTHER：其他文件 * WHOLE_MODEL：全模型 * USER_MODIFIED_MODEL：用户上传模型 > * 资产类型为SCENE、ANIMATION、VIDEO、IMAGE、MATERIAL时，包含MAIN、COVER和OTHER > * 资产类型为PPT时，包含MAIN、COVER、PAGE和OTHER > * 资产类型为HUMAN_MODEL时，包含MAIN、COVER、WHOLE_MODEL、USER_MODIFIED_MODEL和OTHER > * 资产类型为VOICE_MODEL时，包含MAIN、SAMPLE(样例音频文件)和OTHER > * 资产类型为HUMAN_MODEL_2D时，包含MAIN、COVER、SAMPLE(动作样例)和OTHER(遮罩文件) > * 资产类型为BUSINESS_CARD_TEMPLET时，包含MAIN和COVER(名片效果图)
    *
    * @var string[]
    */
    protected static $setters = [
            'fileName' => 'setFileName',
            'fileMd5' => 'setFileMd5',
            'fileSize' => 'setFileSize',
            'fileType' => 'setFileType',
            'assetId' => 'setAssetId',
            'assetFileCategory' => 'setAssetFileCategory'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fileName  文件名，不区分大小写，最大长度256，最小长度1。
    * fileMd5  文件内容MD5值，MD5值需要进行Base64编码。
    * fileSize  文件总的大小，最小1，最大5368709120。
    * fileType  文件类型（默认提取文件后缀）。
    * assetId  资产ID。
    * assetFileCategory  文件在资产中的分类。每种资产类型包含的文件分类不同。 * MAIN：主文件 * COVER：封面文件 * PAGE：内容页图片 * SAMPLE：样例音频 * OTHER：其他文件 * WHOLE_MODEL：全模型 * USER_MODIFIED_MODEL：用户上传模型 > * 资产类型为SCENE、ANIMATION、VIDEO、IMAGE、MATERIAL时，包含MAIN、COVER和OTHER > * 资产类型为PPT时，包含MAIN、COVER、PAGE和OTHER > * 资产类型为HUMAN_MODEL时，包含MAIN、COVER、WHOLE_MODEL、USER_MODIFIED_MODEL和OTHER > * 资产类型为VOICE_MODEL时，包含MAIN、SAMPLE(样例音频文件)和OTHER > * 资产类型为HUMAN_MODEL_2D时，包含MAIN、COVER、SAMPLE(动作样例)和OTHER(遮罩文件) > * 资产类型为BUSINESS_CARD_TEMPLET时，包含MAIN和COVER(名片效果图)
    *
    * @var string[]
    */
    protected static $getters = [
            'fileName' => 'getFileName',
            'fileMd5' => 'getFileMd5',
            'fileSize' => 'getFileSize',
            'fileType' => 'getFileType',
            'assetId' => 'getAssetId',
            'assetFileCategory' => 'getAssetFileCategory'
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
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['fileMd5'] = isset($data['fileMd5']) ? $data['fileMd5'] : null;
        $this->container['fileSize'] = isset($data['fileSize']) ? $data['fileSize'] : null;
        $this->container['fileType'] = isset($data['fileType']) ? $data['fileType'] : null;
        $this->container['assetId'] = isset($data['assetId']) ? $data['assetId'] : null;
        $this->container['assetFileCategory'] = isset($data['assetFileCategory']) ? $data['assetFileCategory'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['fileName'] === null) {
            $invalidProperties[] = "'fileName' can't be null";
        }
            if ((mb_strlen($this->container['fileName']) > 256)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['fileName']) < 1)) {
                $invalidProperties[] = "invalid value for 'fileName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['fileMd5'] === null) {
            $invalidProperties[] = "'fileMd5' can't be null";
        }
            if ((mb_strlen($this->container['fileMd5']) > 24)) {
                $invalidProperties[] = "invalid value for 'fileMd5', the character length must be smaller than or equal to 24.";
            }
            if ((mb_strlen($this->container['fileMd5']) < 24)) {
                $invalidProperties[] = "invalid value for 'fileMd5', the character length must be bigger than or equal to 24.";
            }
        if ($this->container['fileSize'] === null) {
            $invalidProperties[] = "'fileSize' can't be null";
        }
            if (($this->container['fileSize'] > 5368709120)) {
                $invalidProperties[] = "invalid value for 'fileSize', must be smaller than or equal to 5368709120.";
            }
            if (($this->container['fileSize'] < 1)) {
                $invalidProperties[] = "invalid value for 'fileSize', must be bigger than or equal to 1.";
            }
        if ($this->container['fileType'] === null) {
            $invalidProperties[] = "'fileType' can't be null";
        }
            if ((mb_strlen($this->container['fileType']) > 64)) {
                $invalidProperties[] = "invalid value for 'fileType', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['fileType']) < 1)) {
                $invalidProperties[] = "invalid value for 'fileType', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['assetId'] === null) {
            $invalidProperties[] = "'assetId' can't be null";
        }
            if ((mb_strlen($this->container['assetId']) > 64)) {
                $invalidProperties[] = "invalid value for 'assetId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['assetId']) < 1)) {
                $invalidProperties[] = "invalid value for 'assetId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['assetFileCategory'] === null) {
            $invalidProperties[] = "'assetFileCategory' can't be null";
        }
            if ((mb_strlen($this->container['assetFileCategory']) > 128)) {
                $invalidProperties[] = "invalid value for 'assetFileCategory', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['assetFileCategory']) < 1)) {
                $invalidProperties[] = "invalid value for 'assetFileCategory', the character length must be bigger than or equal to 1.";
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
    * Gets fileName
    *  文件名，不区分大小写，最大长度256，最小长度1。
    *
    * @return string
    */
    public function getFileName()
    {
        return $this->container['fileName'];
    }

    /**
    * Sets fileName
    *
    * @param string $fileName 文件名，不区分大小写，最大长度256，最小长度1。
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
        return $this;
    }

    /**
    * Gets fileMd5
    *  文件内容MD5值，MD5值需要进行Base64编码。
    *
    * @return string
    */
    public function getFileMd5()
    {
        return $this->container['fileMd5'];
    }

    /**
    * Sets fileMd5
    *
    * @param string $fileMd5 文件内容MD5值，MD5值需要进行Base64编码。
    *
    * @return $this
    */
    public function setFileMd5($fileMd5)
    {
        $this->container['fileMd5'] = $fileMd5;
        return $this;
    }

    /**
    * Gets fileSize
    *  文件总的大小，最小1，最大5368709120。
    *
    * @return int
    */
    public function getFileSize()
    {
        return $this->container['fileSize'];
    }

    /**
    * Sets fileSize
    *
    * @param int $fileSize 文件总的大小，最小1，最大5368709120。
    *
    * @return $this
    */
    public function setFileSize($fileSize)
    {
        $this->container['fileSize'] = $fileSize;
        return $this;
    }

    /**
    * Gets fileType
    *  文件类型（默认提取文件后缀）。
    *
    * @return string
    */
    public function getFileType()
    {
        return $this->container['fileType'];
    }

    /**
    * Sets fileType
    *
    * @param string $fileType 文件类型（默认提取文件后缀）。
    *
    * @return $this
    */
    public function setFileType($fileType)
    {
        $this->container['fileType'] = $fileType;
        return $this;
    }

    /**
    * Gets assetId
    *  资产ID。
    *
    * @return string
    */
    public function getAssetId()
    {
        return $this->container['assetId'];
    }

    /**
    * Sets assetId
    *
    * @param string $assetId 资产ID。
    *
    * @return $this
    */
    public function setAssetId($assetId)
    {
        $this->container['assetId'] = $assetId;
        return $this;
    }

    /**
    * Gets assetFileCategory
    *  文件在资产中的分类。每种资产类型包含的文件分类不同。 * MAIN：主文件 * COVER：封面文件 * PAGE：内容页图片 * SAMPLE：样例音频 * OTHER：其他文件 * WHOLE_MODEL：全模型 * USER_MODIFIED_MODEL：用户上传模型 > * 资产类型为SCENE、ANIMATION、VIDEO、IMAGE、MATERIAL时，包含MAIN、COVER和OTHER > * 资产类型为PPT时，包含MAIN、COVER、PAGE和OTHER > * 资产类型为HUMAN_MODEL时，包含MAIN、COVER、WHOLE_MODEL、USER_MODIFIED_MODEL和OTHER > * 资产类型为VOICE_MODEL时，包含MAIN、SAMPLE(样例音频文件)和OTHER > * 资产类型为HUMAN_MODEL_2D时，包含MAIN、COVER、SAMPLE(动作样例)和OTHER(遮罩文件) > * 资产类型为BUSINESS_CARD_TEMPLET时，包含MAIN和COVER(名片效果图)
    *
    * @return string
    */
    public function getAssetFileCategory()
    {
        return $this->container['assetFileCategory'];
    }

    /**
    * Sets assetFileCategory
    *
    * @param string $assetFileCategory 文件在资产中的分类。每种资产类型包含的文件分类不同。 * MAIN：主文件 * COVER：封面文件 * PAGE：内容页图片 * SAMPLE：样例音频 * OTHER：其他文件 * WHOLE_MODEL：全模型 * USER_MODIFIED_MODEL：用户上传模型 > * 资产类型为SCENE、ANIMATION、VIDEO、IMAGE、MATERIAL时，包含MAIN、COVER和OTHER > * 资产类型为PPT时，包含MAIN、COVER、PAGE和OTHER > * 资产类型为HUMAN_MODEL时，包含MAIN、COVER、WHOLE_MODEL、USER_MODIFIED_MODEL和OTHER > * 资产类型为VOICE_MODEL时，包含MAIN、SAMPLE(样例音频文件)和OTHER > * 资产类型为HUMAN_MODEL_2D时，包含MAIN、COVER、SAMPLE(动作样例)和OTHER(遮罩文件) > * 资产类型为BUSINESS_CARD_TEMPLET时，包含MAIN和COVER(名片效果图)
    *
    * @return $this
    */
    public function setAssetFileCategory($assetFileCategory)
    {
        $this->container['assetFileCategory'] = $assetFileCategory;
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

