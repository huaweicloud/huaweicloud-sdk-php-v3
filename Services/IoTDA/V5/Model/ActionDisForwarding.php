<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ActionDisForwarding implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ActionDisForwarding';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * regionName  DIS服务对应的region区域
    * projectId  DIS服务对应的projectId信息
    * streamName  DIS服务对应的通道名称，和通道ID参数中至少一个不为空，和通道ID参数都存在时，以通道ID参数值为准。通过调用DIS服务 [查询通道列表](https://support.huaweicloud.com/api-dis/dis_02_0024.html)接口获取。
    * streamId  DIS服务对应的通道ID，和通道名称参数中至少一个不为空，和通道名称参数都存在时，以本参数值为准。通过调用DIS服务 [查询通道详情](https://support.huaweicloud.com/api-dis/dis_02_0025.html)接口获取。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'regionName' => 'string',
            'projectId' => 'string',
            'streamName' => 'string',
            'streamId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * regionName  DIS服务对应的region区域
    * projectId  DIS服务对应的projectId信息
    * streamName  DIS服务对应的通道名称，和通道ID参数中至少一个不为空，和通道ID参数都存在时，以通道ID参数值为准。通过调用DIS服务 [查询通道列表](https://support.huaweicloud.com/api-dis/dis_02_0024.html)接口获取。
    * streamId  DIS服务对应的通道ID，和通道名称参数中至少一个不为空，和通道名称参数都存在时，以本参数值为准。通过调用DIS服务 [查询通道详情](https://support.huaweicloud.com/api-dis/dis_02_0025.html)接口获取。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'regionName' => null,
        'projectId' => null,
        'streamName' => null,
        'streamId' => null
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
    * regionName  DIS服务对应的region区域
    * projectId  DIS服务对应的projectId信息
    * streamName  DIS服务对应的通道名称，和通道ID参数中至少一个不为空，和通道ID参数都存在时，以通道ID参数值为准。通过调用DIS服务 [查询通道列表](https://support.huaweicloud.com/api-dis/dis_02_0024.html)接口获取。
    * streamId  DIS服务对应的通道ID，和通道名称参数中至少一个不为空，和通道名称参数都存在时，以本参数值为准。通过调用DIS服务 [查询通道详情](https://support.huaweicloud.com/api-dis/dis_02_0025.html)接口获取。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'regionName' => 'region_name',
            'projectId' => 'project_id',
            'streamName' => 'stream_name',
            'streamId' => 'stream_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * regionName  DIS服务对应的region区域
    * projectId  DIS服务对应的projectId信息
    * streamName  DIS服务对应的通道名称，和通道ID参数中至少一个不为空，和通道ID参数都存在时，以通道ID参数值为准。通过调用DIS服务 [查询通道列表](https://support.huaweicloud.com/api-dis/dis_02_0024.html)接口获取。
    * streamId  DIS服务对应的通道ID，和通道名称参数中至少一个不为空，和通道名称参数都存在时，以本参数值为准。通过调用DIS服务 [查询通道详情](https://support.huaweicloud.com/api-dis/dis_02_0025.html)接口获取。
    *
    * @var string[]
    */
    protected static $setters = [
            'regionName' => 'setRegionName',
            'projectId' => 'setProjectId',
            'streamName' => 'setStreamName',
            'streamId' => 'setStreamId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * regionName  DIS服务对应的region区域
    * projectId  DIS服务对应的projectId信息
    * streamName  DIS服务对应的通道名称，和通道ID参数中至少一个不为空，和通道ID参数都存在时，以通道ID参数值为准。通过调用DIS服务 [查询通道列表](https://support.huaweicloud.com/api-dis/dis_02_0024.html)接口获取。
    * streamId  DIS服务对应的通道ID，和通道名称参数中至少一个不为空，和通道名称参数都存在时，以本参数值为准。通过调用DIS服务 [查询通道详情](https://support.huaweicloud.com/api-dis/dis_02_0025.html)接口获取。
    *
    * @var string[]
    */
    protected static $getters = [
            'regionName' => 'getRegionName',
            'projectId' => 'getProjectId',
            'streamName' => 'getStreamName',
            'streamId' => 'getStreamId'
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
        $this->container['regionName'] = isset($data['regionName']) ? $data['regionName'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['streamName'] = isset($data['streamName']) ? $data['streamName'] : null;
        $this->container['streamId'] = isset($data['streamId']) ? $data['streamId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['regionName'] === null) {
            $invalidProperties[] = "'regionName' can't be null";
        }
            if ((mb_strlen($this->container['regionName']) > 256)) {
                $invalidProperties[] = "invalid value for 'regionName', the character length must be smaller than or equal to 256.";
            }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 256)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['streamName']) && (mb_strlen($this->container['streamName']) > 256)) {
                $invalidProperties[] = "invalid value for 'streamName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['streamId']) && (mb_strlen($this->container['streamId']) > 256)) {
                $invalidProperties[] = "invalid value for 'streamId', the character length must be smaller than or equal to 256.";
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
    * Gets regionName
    *  DIS服务对应的region区域
    *
    * @return string
    */
    public function getRegionName()
    {
        return $this->container['regionName'];
    }

    /**
    * Sets regionName
    *
    * @param string $regionName DIS服务对应的region区域
    *
    * @return $this
    */
    public function setRegionName($regionName)
    {
        $this->container['regionName'] = $regionName;
        return $this;
    }

    /**
    * Gets projectId
    *  DIS服务对应的projectId信息
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId DIS服务对应的projectId信息
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets streamName
    *  DIS服务对应的通道名称，和通道ID参数中至少一个不为空，和通道ID参数都存在时，以通道ID参数值为准。通过调用DIS服务 [查询通道列表](https://support.huaweicloud.com/api-dis/dis_02_0024.html)接口获取。
    *
    * @return string|null
    */
    public function getStreamName()
    {
        return $this->container['streamName'];
    }

    /**
    * Sets streamName
    *
    * @param string|null $streamName DIS服务对应的通道名称，和通道ID参数中至少一个不为空，和通道ID参数都存在时，以通道ID参数值为准。通过调用DIS服务 [查询通道列表](https://support.huaweicloud.com/api-dis/dis_02_0024.html)接口获取。
    *
    * @return $this
    */
    public function setStreamName($streamName)
    {
        $this->container['streamName'] = $streamName;
        return $this;
    }

    /**
    * Gets streamId
    *  DIS服务对应的通道ID，和通道名称参数中至少一个不为空，和通道名称参数都存在时，以本参数值为准。通过调用DIS服务 [查询通道详情](https://support.huaweicloud.com/api-dis/dis_02_0025.html)接口获取。
    *
    * @return string|null
    */
    public function getStreamId()
    {
        return $this->container['streamId'];
    }

    /**
    * Sets streamId
    *
    * @param string|null $streamId DIS服务对应的通道ID，和通道名称参数中至少一个不为空，和通道名称参数都存在时，以本参数值为准。通过调用DIS服务 [查询通道详情](https://support.huaweicloud.com/api-dis/dis_02_0025.html)接口获取。
    *
    * @return $this
    */
    public function setStreamId($streamId)
    {
        $this->container['streamId'] = $streamId;
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

