<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetAccessConfigListRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetAccessConfigListRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accessConfigNameList  接入配置名称列表
    * hostGroupNameList  主机组名称列表
    * logGroupNameList  日志组名称列表
    * logStreamNameList  日志流名称列表
    * accessConfigTagList  接入配置标签，KEY不能重复,最多20个标签
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accessConfigNameList' => 'string[]',
            'hostGroupNameList' => 'string[]',
            'logGroupNameList' => 'string[]',
            'logStreamNameList' => 'string[]',
            'accessConfigTagList' => '\HuaweiCloud\SDK\Lts\V2\Model\AccessConfigTag[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accessConfigNameList  接入配置名称列表
    * hostGroupNameList  主机组名称列表
    * logGroupNameList  日志组名称列表
    * logStreamNameList  日志流名称列表
    * accessConfigTagList  接入配置标签，KEY不能重复,最多20个标签
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accessConfigNameList' => null,
        'hostGroupNameList' => null,
        'logGroupNameList' => null,
        'logStreamNameList' => null,
        'accessConfigTagList' => null
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
    * accessConfigNameList  接入配置名称列表
    * hostGroupNameList  主机组名称列表
    * logGroupNameList  日志组名称列表
    * logStreamNameList  日志流名称列表
    * accessConfigTagList  接入配置标签，KEY不能重复,最多20个标签
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accessConfigNameList' => 'access_config_name_list',
            'hostGroupNameList' => 'host_group_name_list',
            'logGroupNameList' => 'log_group_name_list',
            'logStreamNameList' => 'log_stream_name_list',
            'accessConfigTagList' => 'access_config_tag_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accessConfigNameList  接入配置名称列表
    * hostGroupNameList  主机组名称列表
    * logGroupNameList  日志组名称列表
    * logStreamNameList  日志流名称列表
    * accessConfigTagList  接入配置标签，KEY不能重复,最多20个标签
    *
    * @var string[]
    */
    protected static $setters = [
            'accessConfigNameList' => 'setAccessConfigNameList',
            'hostGroupNameList' => 'setHostGroupNameList',
            'logGroupNameList' => 'setLogGroupNameList',
            'logStreamNameList' => 'setLogStreamNameList',
            'accessConfigTagList' => 'setAccessConfigTagList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accessConfigNameList  接入配置名称列表
    * hostGroupNameList  主机组名称列表
    * logGroupNameList  日志组名称列表
    * logStreamNameList  日志流名称列表
    * accessConfigTagList  接入配置标签，KEY不能重复,最多20个标签
    *
    * @var string[]
    */
    protected static $getters = [
            'accessConfigNameList' => 'getAccessConfigNameList',
            'hostGroupNameList' => 'getHostGroupNameList',
            'logGroupNameList' => 'getLogGroupNameList',
            'logStreamNameList' => 'getLogStreamNameList',
            'accessConfigTagList' => 'getAccessConfigTagList'
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
        $this->container['accessConfigNameList'] = isset($data['accessConfigNameList']) ? $data['accessConfigNameList'] : null;
        $this->container['hostGroupNameList'] = isset($data['hostGroupNameList']) ? $data['hostGroupNameList'] : null;
        $this->container['logGroupNameList'] = isset($data['logGroupNameList']) ? $data['logGroupNameList'] : null;
        $this->container['logStreamNameList'] = isset($data['logStreamNameList']) ? $data['logStreamNameList'] : null;
        $this->container['accessConfigTagList'] = isset($data['accessConfigTagList']) ? $data['accessConfigTagList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['accessConfigNameList'] === null) {
            $invalidProperties[] = "'accessConfigNameList' can't be null";
        }
        if ($this->container['hostGroupNameList'] === null) {
            $invalidProperties[] = "'hostGroupNameList' can't be null";
        }
        if ($this->container['logGroupNameList'] === null) {
            $invalidProperties[] = "'logGroupNameList' can't be null";
        }
        if ($this->container['logStreamNameList'] === null) {
            $invalidProperties[] = "'logStreamNameList' can't be null";
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
    * Gets accessConfigNameList
    *  接入配置名称列表
    *
    * @return string[]
    */
    public function getAccessConfigNameList()
    {
        return $this->container['accessConfigNameList'];
    }

    /**
    * Sets accessConfigNameList
    *
    * @param string[] $accessConfigNameList 接入配置名称列表
    *
    * @return $this
    */
    public function setAccessConfigNameList($accessConfigNameList)
    {
        $this->container['accessConfigNameList'] = $accessConfigNameList;
        return $this;
    }

    /**
    * Gets hostGroupNameList
    *  主机组名称列表
    *
    * @return string[]
    */
    public function getHostGroupNameList()
    {
        return $this->container['hostGroupNameList'];
    }

    /**
    * Sets hostGroupNameList
    *
    * @param string[] $hostGroupNameList 主机组名称列表
    *
    * @return $this
    */
    public function setHostGroupNameList($hostGroupNameList)
    {
        $this->container['hostGroupNameList'] = $hostGroupNameList;
        return $this;
    }

    /**
    * Gets logGroupNameList
    *  日志组名称列表
    *
    * @return string[]
    */
    public function getLogGroupNameList()
    {
        return $this->container['logGroupNameList'];
    }

    /**
    * Sets logGroupNameList
    *
    * @param string[] $logGroupNameList 日志组名称列表
    *
    * @return $this
    */
    public function setLogGroupNameList($logGroupNameList)
    {
        $this->container['logGroupNameList'] = $logGroupNameList;
        return $this;
    }

    /**
    * Gets logStreamNameList
    *  日志流名称列表
    *
    * @return string[]
    */
    public function getLogStreamNameList()
    {
        return $this->container['logStreamNameList'];
    }

    /**
    * Sets logStreamNameList
    *
    * @param string[] $logStreamNameList 日志流名称列表
    *
    * @return $this
    */
    public function setLogStreamNameList($logStreamNameList)
    {
        $this->container['logStreamNameList'] = $logStreamNameList;
        return $this;
    }

    /**
    * Gets accessConfigTagList
    *  接入配置标签，KEY不能重复,最多20个标签
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\AccessConfigTag[]|null
    */
    public function getAccessConfigTagList()
    {
        return $this->container['accessConfigTagList'];
    }

    /**
    * Sets accessConfigTagList
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\AccessConfigTag[]|null $accessConfigTagList 接入配置标签，KEY不能重复,最多20个标签
    *
    * @return $this
    */
    public function setAccessConfigTagList($accessConfigTagList)
    {
        $this->container['accessConfigTagList'] = $accessConfigTagList;
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

