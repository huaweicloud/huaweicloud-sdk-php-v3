<?php

namespace HuaweiCloud\SDK\Er\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FlowLogRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FlowLogRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  流日志名称
    * description  流日志描述
    * resourceType  流日志采集的资源类型:   - VPC连接   - 虚拟网关连接   - 对等连接
    * resourceId  要采集的资源ID
    * logGroupId  日志组ID。请在云日志服务中获取，详情请参见《云日志服务用户指南》。
    * logStreamId  日志主题ID。请在云日志服务中获取，详情请参见《云日志服务用户指南》。
    * logStoreType  流日志的存储类型: - LTS: 云日志服务器存储
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'resourceType' => 'string',
            'resourceId' => 'string',
            'logGroupId' => 'string',
            'logStreamId' => 'string',
            'logStoreType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  流日志名称
    * description  流日志描述
    * resourceType  流日志采集的资源类型:   - VPC连接   - 虚拟网关连接   - 对等连接
    * resourceId  要采集的资源ID
    * logGroupId  日志组ID。请在云日志服务中获取，详情请参见《云日志服务用户指南》。
    * logStreamId  日志主题ID。请在云日志服务中获取，详情请参见《云日志服务用户指南》。
    * logStoreType  流日志的存储类型: - LTS: 云日志服务器存储
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'resourceType' => null,
        'resourceId' => null,
        'logGroupId' => null,
        'logStreamId' => null,
        'logStoreType' => null
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
    * name  流日志名称
    * description  流日志描述
    * resourceType  流日志采集的资源类型:   - VPC连接   - 虚拟网关连接   - 对等连接
    * resourceId  要采集的资源ID
    * logGroupId  日志组ID。请在云日志服务中获取，详情请参见《云日志服务用户指南》。
    * logStreamId  日志主题ID。请在云日志服务中获取，详情请参见《云日志服务用户指南》。
    * logStoreType  流日志的存储类型: - LTS: 云日志服务器存储
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'resourceType' => 'resource_type',
            'resourceId' => 'resource_id',
            'logGroupId' => 'log_group_id',
            'logStreamId' => 'log_stream_id',
            'logStoreType' => 'log_store_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  流日志名称
    * description  流日志描述
    * resourceType  流日志采集的资源类型:   - VPC连接   - 虚拟网关连接   - 对等连接
    * resourceId  要采集的资源ID
    * logGroupId  日志组ID。请在云日志服务中获取，详情请参见《云日志服务用户指南》。
    * logStreamId  日志主题ID。请在云日志服务中获取，详情请参见《云日志服务用户指南》。
    * logStoreType  流日志的存储类型: - LTS: 云日志服务器存储
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'resourceType' => 'setResourceType',
            'resourceId' => 'setResourceId',
            'logGroupId' => 'setLogGroupId',
            'logStreamId' => 'setLogStreamId',
            'logStoreType' => 'setLogStoreType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  流日志名称
    * description  流日志描述
    * resourceType  流日志采集的资源类型:   - VPC连接   - 虚拟网关连接   - 对等连接
    * resourceId  要采集的资源ID
    * logGroupId  日志组ID。请在云日志服务中获取，详情请参见《云日志服务用户指南》。
    * logStreamId  日志主题ID。请在云日志服务中获取，详情请参见《云日志服务用户指南》。
    * logStoreType  流日志的存储类型: - LTS: 云日志服务器存储
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'resourceType' => 'getResourceType',
            'resourceId' => 'getResourceId',
            'logGroupId' => 'getLogGroupId',
            'logStreamId' => 'getLogStreamId',
            'logStoreType' => 'getLogStoreType'
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
    const RESOURCE_TYPE_ATTACHMENT = 'attachment';
    const LOG_STORE_TYPE_LTS = 'LTS';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getResourceTypeAllowableValues()
    {
        return [
            self::RESOURCE_TYPE_ATTACHMENT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLogStoreTypeAllowableValues()
    {
        return [
            self::LOG_STORE_TYPE_LTS,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['logGroupId'] = isset($data['logGroupId']) ? $data['logGroupId'] : null;
        $this->container['logStreamId'] = isset($data['logStreamId']) ? $data['logStreamId'] : null;
        $this->container['logStoreType'] = isset($data['logStoreType']) ? $data['logStoreType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/[\\u4e00-\\u9fa5a-zA-Z0-9-_.]*/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /[\\u4e00-\\u9fa5a-zA-Z0-9-_.]*/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && !preg_match("/[^<>]*/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /[^<>]*/.";
            }
        if ($this->container['resourceType'] === null) {
            $invalidProperties[] = "'resourceType' can't be null";
        }
            $allowedValues = $this->getResourceTypeAllowableValues();
                if (!is_null($this->container['resourceType']) && !in_array($this->container['resourceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'resourceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['resourceId'] === null) {
            $invalidProperties[] = "'resourceId' can't be null";
        }
            if (!preg_match("/[0-9a-fA-F]{8}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{12}/", $this->container['resourceId'])) {
                $invalidProperties[] = "invalid value for 'resourceId', must be conform to the pattern /[0-9a-fA-F]{8}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{12}/.";
            }
        if ($this->container['logGroupId'] === null) {
            $invalidProperties[] = "'logGroupId' can't be null";
        }
            if (!preg_match("/[0-9a-fA-F]{8}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{12}/", $this->container['logGroupId'])) {
                $invalidProperties[] = "invalid value for 'logGroupId', must be conform to the pattern /[0-9a-fA-F]{8}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{12}/.";
            }
        if ($this->container['logStreamId'] === null) {
            $invalidProperties[] = "'logStreamId' can't be null";
        }
            if (!preg_match("/[0-9a-fA-F]{8}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{12}/", $this->container['logStreamId'])) {
                $invalidProperties[] = "invalid value for 'logStreamId', must be conform to the pattern /[0-9a-fA-F]{8}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{12}/.";
            }
        if ($this->container['logStoreType'] === null) {
            $invalidProperties[] = "'logStoreType' can't be null";
        }
            $allowedValues = $this->getLogStoreTypeAllowableValues();
                if (!is_null($this->container['logStoreType']) && !in_array($this->container['logStoreType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'logStoreType', must be one of '%s'",
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
    * Gets name
    *  流日志名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 流日志名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  流日志描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 流日志描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets resourceType
    *  流日志采集的资源类型:   - VPC连接   - 虚拟网关连接   - 对等连接
    *
    * @return string
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string $resourceType 流日志采集的资源类型:   - VPC连接   - 虚拟网关连接   - 对等连接
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets resourceId
    *  要采集的资源ID
    *
    * @return string
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string $resourceId 要采集的资源ID
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets logGroupId
    *  日志组ID。请在云日志服务中获取，详情请参见《云日志服务用户指南》。
    *
    * @return string
    */
    public function getLogGroupId()
    {
        return $this->container['logGroupId'];
    }

    /**
    * Sets logGroupId
    *
    * @param string $logGroupId 日志组ID。请在云日志服务中获取，详情请参见《云日志服务用户指南》。
    *
    * @return $this
    */
    public function setLogGroupId($logGroupId)
    {
        $this->container['logGroupId'] = $logGroupId;
        return $this;
    }

    /**
    * Gets logStreamId
    *  日志主题ID。请在云日志服务中获取，详情请参见《云日志服务用户指南》。
    *
    * @return string
    */
    public function getLogStreamId()
    {
        return $this->container['logStreamId'];
    }

    /**
    * Sets logStreamId
    *
    * @param string $logStreamId 日志主题ID。请在云日志服务中获取，详情请参见《云日志服务用户指南》。
    *
    * @return $this
    */
    public function setLogStreamId($logStreamId)
    {
        $this->container['logStreamId'] = $logStreamId;
        return $this;
    }

    /**
    * Gets logStoreType
    *  流日志的存储类型: - LTS: 云日志服务器存储
    *
    * @return string
    */
    public function getLogStoreType()
    {
        return $this->container['logStoreType'];
    }

    /**
    * Sets logStoreType
    *
    * @param string $logStoreType 流日志的存储类型: - LTS: 云日志服务器存储
    *
    * @return $this
    */
    public function setLogStoreType($logStoreType)
    {
        $this->container['logStoreType'] = $logStoreType;
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

