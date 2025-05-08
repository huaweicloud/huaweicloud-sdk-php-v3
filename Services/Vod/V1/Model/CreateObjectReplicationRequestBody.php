<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateObjectReplicationRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateObjectReplicationRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * srcInfo  srcInfo
    * fileType  源文件类型
    * destInfo  destInfo
    * categoryId  媒资分类id
    * callbackUrl  回调地址，为空则不回调
    * sessionContext  自定义上下文，回调时会回调给用户，透传信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'srcInfo' => '\HuaweiCloud\SDK\Vod\V1\Model\ObsInfo',
            'fileType' => 'string',
            'destInfo' => '\HuaweiCloud\SDK\Vod\V1\Model\ObsInfo',
            'categoryId' => 'object',
            'callbackUrl' => 'string',
            'sessionContext' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * srcInfo  srcInfo
    * fileType  源文件类型
    * destInfo  destInfo
    * categoryId  媒资分类id
    * callbackUrl  回调地址，为空则不回调
    * sessionContext  自定义上下文，回调时会回调给用户，透传信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'srcInfo' => null,
        'fileType' => null,
        'destInfo' => null,
        'categoryId' => null,
        'callbackUrl' => null,
        'sessionContext' => null
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
    * srcInfo  srcInfo
    * fileType  源文件类型
    * destInfo  destInfo
    * categoryId  媒资分类id
    * callbackUrl  回调地址，为空则不回调
    * sessionContext  自定义上下文，回调时会回调给用户，透传信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'srcInfo' => 'src_info',
            'fileType' => 'file_type',
            'destInfo' => 'dest_info',
            'categoryId' => 'category_id',
            'callbackUrl' => 'callback_url',
            'sessionContext' => 'session_context'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * srcInfo  srcInfo
    * fileType  源文件类型
    * destInfo  destInfo
    * categoryId  媒资分类id
    * callbackUrl  回调地址，为空则不回调
    * sessionContext  自定义上下文，回调时会回调给用户，透传信息
    *
    * @var string[]
    */
    protected static $setters = [
            'srcInfo' => 'setSrcInfo',
            'fileType' => 'setFileType',
            'destInfo' => 'setDestInfo',
            'categoryId' => 'setCategoryId',
            'callbackUrl' => 'setCallbackUrl',
            'sessionContext' => 'setSessionContext'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * srcInfo  srcInfo
    * fileType  源文件类型
    * destInfo  destInfo
    * categoryId  媒资分类id
    * callbackUrl  回调地址，为空则不回调
    * sessionContext  自定义上下文，回调时会回调给用户，透传信息
    *
    * @var string[]
    */
    protected static $getters = [
            'srcInfo' => 'getSrcInfo',
            'fileType' => 'getFileType',
            'destInfo' => 'getDestInfo',
            'categoryId' => 'getCategoryId',
            'callbackUrl' => 'getCallbackUrl',
            'sessionContext' => 'getSessionContext'
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
        $this->container['srcInfo'] = isset($data['srcInfo']) ? $data['srcInfo'] : null;
        $this->container['fileType'] = isset($data['fileType']) ? $data['fileType'] : null;
        $this->container['destInfo'] = isset($data['destInfo']) ? $data['destInfo'] : null;
        $this->container['categoryId'] = isset($data['categoryId']) ? $data['categoryId'] : null;
        $this->container['callbackUrl'] = isset($data['callbackUrl']) ? $data['callbackUrl'] : null;
        $this->container['sessionContext'] = isset($data['sessionContext']) ? $data['sessionContext'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['srcInfo'] === null) {
            $invalidProperties[] = "'srcInfo' can't be null";
        }
            if (!is_null($this->container['fileType']) && (mb_strlen($this->container['fileType']) > 32)) {
                $invalidProperties[] = "invalid value for 'fileType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['fileType']) && (mb_strlen($this->container['fileType']) < 1)) {
                $invalidProperties[] = "invalid value for 'fileType', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['destInfo'] === null) {
            $invalidProperties[] = "'destInfo' can't be null";
        }
            if (!is_null($this->container['callbackUrl']) && (mb_strlen($this->container['callbackUrl']) > 1024)) {
                $invalidProperties[] = "invalid value for 'callbackUrl', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['callbackUrl']) && (mb_strlen($this->container['callbackUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'callbackUrl', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sessionContext']) && (mb_strlen($this->container['sessionContext']) > 1024)) {
                $invalidProperties[] = "invalid value for 'sessionContext', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['sessionContext']) && (mb_strlen($this->container['sessionContext']) < 0)) {
                $invalidProperties[] = "invalid value for 'sessionContext', the character length must be bigger than or equal to 0.";
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
    * Gets srcInfo
    *  srcInfo
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\ObsInfo
    */
    public function getSrcInfo()
    {
        return $this->container['srcInfo'];
    }

    /**
    * Sets srcInfo
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\ObsInfo $srcInfo srcInfo
    *
    * @return $this
    */
    public function setSrcInfo($srcInfo)
    {
        $this->container['srcInfo'] = $srcInfo;
        return $this;
    }

    /**
    * Gets fileType
    *  源文件类型
    *
    * @return string|null
    */
    public function getFileType()
    {
        return $this->container['fileType'];
    }

    /**
    * Sets fileType
    *
    * @param string|null $fileType 源文件类型
    *
    * @return $this
    */
    public function setFileType($fileType)
    {
        $this->container['fileType'] = $fileType;
        return $this;
    }

    /**
    * Gets destInfo
    *  destInfo
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\ObsInfo
    */
    public function getDestInfo()
    {
        return $this->container['destInfo'];
    }

    /**
    * Sets destInfo
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\ObsInfo $destInfo destInfo
    *
    * @return $this
    */
    public function setDestInfo($destInfo)
    {
        $this->container['destInfo'] = $destInfo;
        return $this;
    }

    /**
    * Gets categoryId
    *  媒资分类id
    *
    * @return object|null
    */
    public function getCategoryId()
    {
        return $this->container['categoryId'];
    }

    /**
    * Sets categoryId
    *
    * @param object|null $categoryId 媒资分类id
    *
    * @return $this
    */
    public function setCategoryId($categoryId)
    {
        $this->container['categoryId'] = $categoryId;
        return $this;
    }

    /**
    * Gets callbackUrl
    *  回调地址，为空则不回调
    *
    * @return string|null
    */
    public function getCallbackUrl()
    {
        return $this->container['callbackUrl'];
    }

    /**
    * Sets callbackUrl
    *
    * @param string|null $callbackUrl 回调地址，为空则不回调
    *
    * @return $this
    */
    public function setCallbackUrl($callbackUrl)
    {
        $this->container['callbackUrl'] = $callbackUrl;
        return $this;
    }

    /**
    * Gets sessionContext
    *  自定义上下文，回调时会回调给用户，透传信息
    *
    * @return string|null
    */
    public function getSessionContext()
    {
        return $this->container['sessionContext'];
    }

    /**
    * Sets sessionContext
    *
    * @param string|null $sessionContext 自定义上下文，回调时会回调给用户，透传信息
    *
    * @return $this
    */
    public function setSessionContext($sessionContext)
    {
        $this->container['sessionContext'] = $sessionContext;
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

