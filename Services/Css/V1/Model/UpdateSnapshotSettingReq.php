<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateSnapshotSettingReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateSnapshotSettingReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bucket  备份使用的OBS桶的桶名。
    * agency  委托名称，委托给CSS，允许CSS调用您的其他云服务。
    * basePath  快照在OBS桶中的存放路径。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bucket' => 'string',
            'agency' => 'string',
            'basePath' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bucket  备份使用的OBS桶的桶名。
    * agency  委托名称，委托给CSS，允许CSS调用您的其他云服务。
    * basePath  快照在OBS桶中的存放路径。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bucket' => null,
        'agency' => null,
        'basePath' => null
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
    * bucket  备份使用的OBS桶的桶名。
    * agency  委托名称，委托给CSS，允许CSS调用您的其他云服务。
    * basePath  快照在OBS桶中的存放路径。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bucket' => 'bucket',
            'agency' => 'agency',
            'basePath' => 'basePath'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bucket  备份使用的OBS桶的桶名。
    * agency  委托名称，委托给CSS，允许CSS调用您的其他云服务。
    * basePath  快照在OBS桶中的存放路径。
    *
    * @var string[]
    */
    protected static $setters = [
            'bucket' => 'setBucket',
            'agency' => 'setAgency',
            'basePath' => 'setBasePath'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bucket  备份使用的OBS桶的桶名。
    * agency  委托名称，委托给CSS，允许CSS调用您的其他云服务。
    * basePath  快照在OBS桶中的存放路径。
    *
    * @var string[]
    */
    protected static $getters = [
            'bucket' => 'getBucket',
            'agency' => 'getAgency',
            'basePath' => 'getBasePath'
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
        $this->container['bucket'] = isset($data['bucket']) ? $data['bucket'] : null;
        $this->container['agency'] = isset($data['agency']) ? $data['agency'] : null;
        $this->container['basePath'] = isset($data['basePath']) ? $data['basePath'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['bucket'] === null) {
            $invalidProperties[] = "'bucket' can't be null";
        }
        if ($this->container['agency'] === null) {
            $invalidProperties[] = "'agency' can't be null";
        }
        if ($this->container['basePath'] === null) {
            $invalidProperties[] = "'basePath' can't be null";
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
    * Gets bucket
    *  备份使用的OBS桶的桶名。
    *
    * @return string
    */
    public function getBucket()
    {
        return $this->container['bucket'];
    }

    /**
    * Sets bucket
    *
    * @param string $bucket 备份使用的OBS桶的桶名。
    *
    * @return $this
    */
    public function setBucket($bucket)
    {
        $this->container['bucket'] = $bucket;
        return $this;
    }

    /**
    * Gets agency
    *  委托名称，委托给CSS，允许CSS调用您的其他云服务。
    *
    * @return string
    */
    public function getAgency()
    {
        return $this->container['agency'];
    }

    /**
    * Sets agency
    *
    * @param string $agency 委托名称，委托给CSS，允许CSS调用您的其他云服务。
    *
    * @return $this
    */
    public function setAgency($agency)
    {
        $this->container['agency'] = $agency;
        return $this;
    }

    /**
    * Gets basePath
    *  快照在OBS桶中的存放路径。
    *
    * @return string
    */
    public function getBasePath()
    {
        return $this->container['basePath'];
    }

    /**
    * Sets basePath
    *
    * @param string $basePath 快照在OBS桶中的存放路径。
    *
    * @return $this
    */
    public function setBasePath($basePath)
    {
        $this->container['basePath'] = $basePath;
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

