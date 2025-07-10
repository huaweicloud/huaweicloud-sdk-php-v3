<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddTrustedIpAddressRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddTrustedIpAddressRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ipType  格式类型，指定ip，ip范围，CIDR
    * ipStart  起始ip
    * ipEnd  结束ip
    * viewFlag  是否允许访问代码仓库
    * downloadFlag  是否允许下载代码
    * uploadFlag  是否允许提交代码
    * remark  备注
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ipType' => 'int',
            'ipStart' => 'string',
            'ipEnd' => 'string',
            'viewFlag' => 'int',
            'downloadFlag' => 'int',
            'uploadFlag' => 'int',
            'remark' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ipType  格式类型，指定ip，ip范围，CIDR
    * ipStart  起始ip
    * ipEnd  结束ip
    * viewFlag  是否允许访问代码仓库
    * downloadFlag  是否允许下载代码
    * uploadFlag  是否允许提交代码
    * remark  备注
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ipType' => null,
        'ipStart' => null,
        'ipEnd' => null,
        'viewFlag' => null,
        'downloadFlag' => null,
        'uploadFlag' => null,
        'remark' => null
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
    * ipType  格式类型，指定ip，ip范围，CIDR
    * ipStart  起始ip
    * ipEnd  结束ip
    * viewFlag  是否允许访问代码仓库
    * downloadFlag  是否允许下载代码
    * uploadFlag  是否允许提交代码
    * remark  备注
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ipType' => 'ip_type',
            'ipStart' => 'ip_start',
            'ipEnd' => 'ip_end',
            'viewFlag' => 'view_flag',
            'downloadFlag' => 'download_flag',
            'uploadFlag' => 'upload_flag',
            'remark' => 'remark'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ipType  格式类型，指定ip，ip范围，CIDR
    * ipStart  起始ip
    * ipEnd  结束ip
    * viewFlag  是否允许访问代码仓库
    * downloadFlag  是否允许下载代码
    * uploadFlag  是否允许提交代码
    * remark  备注
    *
    * @var string[]
    */
    protected static $setters = [
            'ipType' => 'setIpType',
            'ipStart' => 'setIpStart',
            'ipEnd' => 'setIpEnd',
            'viewFlag' => 'setViewFlag',
            'downloadFlag' => 'setDownloadFlag',
            'uploadFlag' => 'setUploadFlag',
            'remark' => 'setRemark'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ipType  格式类型，指定ip，ip范围，CIDR
    * ipStart  起始ip
    * ipEnd  结束ip
    * viewFlag  是否允许访问代码仓库
    * downloadFlag  是否允许下载代码
    * uploadFlag  是否允许提交代码
    * remark  备注
    *
    * @var string[]
    */
    protected static $getters = [
            'ipType' => 'getIpType',
            'ipStart' => 'getIpStart',
            'ipEnd' => 'getIpEnd',
            'viewFlag' => 'getViewFlag',
            'downloadFlag' => 'getDownloadFlag',
            'uploadFlag' => 'getUploadFlag',
            'remark' => 'getRemark'
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
        $this->container['ipType'] = isset($data['ipType']) ? $data['ipType'] : null;
        $this->container['ipStart'] = isset($data['ipStart']) ? $data['ipStart'] : null;
        $this->container['ipEnd'] = isset($data['ipEnd']) ? $data['ipEnd'] : null;
        $this->container['viewFlag'] = isset($data['viewFlag']) ? $data['viewFlag'] : null;
        $this->container['downloadFlag'] = isset($data['downloadFlag']) ? $data['downloadFlag'] : null;
        $this->container['uploadFlag'] = isset($data['uploadFlag']) ? $data['uploadFlag'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['ipStart']) && (mb_strlen($this->container['ipStart']) > 1000)) {
                $invalidProperties[] = "invalid value for 'ipStart', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['ipStart']) && (mb_strlen($this->container['ipStart']) < 0)) {
                $invalidProperties[] = "invalid value for 'ipStart', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ipEnd']) && (mb_strlen($this->container['ipEnd']) > 1000)) {
                $invalidProperties[] = "invalid value for 'ipEnd', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['ipEnd']) && (mb_strlen($this->container['ipEnd']) < 0)) {
                $invalidProperties[] = "invalid value for 'ipEnd', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['remark']) && (mb_strlen($this->container['remark']) > 200)) {
                $invalidProperties[] = "invalid value for 'remark', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['remark']) && (mb_strlen($this->container['remark']) < 0)) {
                $invalidProperties[] = "invalid value for 'remark', the character length must be bigger than or equal to 0.";
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
    * Gets ipType
    *  格式类型，指定ip，ip范围，CIDR
    *
    * @return int|null
    */
    public function getIpType()
    {
        return $this->container['ipType'];
    }

    /**
    * Sets ipType
    *
    * @param int|null $ipType 格式类型，指定ip，ip范围，CIDR
    *
    * @return $this
    */
    public function setIpType($ipType)
    {
        $this->container['ipType'] = $ipType;
        return $this;
    }

    /**
    * Gets ipStart
    *  起始ip
    *
    * @return string|null
    */
    public function getIpStart()
    {
        return $this->container['ipStart'];
    }

    /**
    * Sets ipStart
    *
    * @param string|null $ipStart 起始ip
    *
    * @return $this
    */
    public function setIpStart($ipStart)
    {
        $this->container['ipStart'] = $ipStart;
        return $this;
    }

    /**
    * Gets ipEnd
    *  结束ip
    *
    * @return string|null
    */
    public function getIpEnd()
    {
        return $this->container['ipEnd'];
    }

    /**
    * Sets ipEnd
    *
    * @param string|null $ipEnd 结束ip
    *
    * @return $this
    */
    public function setIpEnd($ipEnd)
    {
        $this->container['ipEnd'] = $ipEnd;
        return $this;
    }

    /**
    * Gets viewFlag
    *  是否允许访问代码仓库
    *
    * @return int|null
    */
    public function getViewFlag()
    {
        return $this->container['viewFlag'];
    }

    /**
    * Sets viewFlag
    *
    * @param int|null $viewFlag 是否允许访问代码仓库
    *
    * @return $this
    */
    public function setViewFlag($viewFlag)
    {
        $this->container['viewFlag'] = $viewFlag;
        return $this;
    }

    /**
    * Gets downloadFlag
    *  是否允许下载代码
    *
    * @return int|null
    */
    public function getDownloadFlag()
    {
        return $this->container['downloadFlag'];
    }

    /**
    * Sets downloadFlag
    *
    * @param int|null $downloadFlag 是否允许下载代码
    *
    * @return $this
    */
    public function setDownloadFlag($downloadFlag)
    {
        $this->container['downloadFlag'] = $downloadFlag;
        return $this;
    }

    /**
    * Gets uploadFlag
    *  是否允许提交代码
    *
    * @return int|null
    */
    public function getUploadFlag()
    {
        return $this->container['uploadFlag'];
    }

    /**
    * Sets uploadFlag
    *
    * @param int|null $uploadFlag 是否允许提交代码
    *
    * @return $this
    */
    public function setUploadFlag($uploadFlag)
    {
        $this->container['uploadFlag'] = $uploadFlag;
        return $this;
    }

    /**
    * Gets remark
    *  备注
    *
    * @return string|null
    */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
    * Sets remark
    *
    * @param string|null $remark 备注
    *
    * @return $this
    */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;
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

