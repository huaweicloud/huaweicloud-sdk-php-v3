<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowIpdFieldsV2Request implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowIpdFieldsV2Request';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目32位ID，项目唯一标识。通过查询IPD项目列表获取，响应消息体中的id字段的值就是项目ID。
    * categoryId  工作项类型ID，工作项类型的唯一标识。 不同项目模型下可选值不同： - IPD-系统设备类：10021（RR）、10065（SF）、10020（IR）、10022（SR）、10029（AR）、10027（Task）、10033（Bug） - IPD-独立软件类：10021（RR）、10065（SF）、10020（IR）、10023（US）、10027（Task）、10033（Bug） - IPD-自运营软件/云服务类：10001（Epic）、10028（FE）、10021（RR）、10023（US）、10027（Task）、10033（Bug）
    * categoryLayerId  层级字段ID。用于过滤层级类型的字段，当需要按层级结构筛选字段时传入。
    * targetProjectId  目标项目32位ID，项目唯一标识。通过查询IPD项目列表获取，响应消息体中的id字段的值就是项目ID。当需要查询其他项目的字段配置时传入。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'categoryId' => 'string',
            'categoryLayerId' => 'string',
            'targetProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目32位ID，项目唯一标识。通过查询IPD项目列表获取，响应消息体中的id字段的值就是项目ID。
    * categoryId  工作项类型ID，工作项类型的唯一标识。 不同项目模型下可选值不同： - IPD-系统设备类：10021（RR）、10065（SF）、10020（IR）、10022（SR）、10029（AR）、10027（Task）、10033（Bug） - IPD-独立软件类：10021（RR）、10065（SF）、10020（IR）、10023（US）、10027（Task）、10033（Bug） - IPD-自运营软件/云服务类：10001（Epic）、10028（FE）、10021（RR）、10023（US）、10027（Task）、10033（Bug）
    * categoryLayerId  层级字段ID。用于过滤层级类型的字段，当需要按层级结构筛选字段时传入。
    * targetProjectId  目标项目32位ID，项目唯一标识。通过查询IPD项目列表获取，响应消息体中的id字段的值就是项目ID。当需要查询其他项目的字段配置时传入。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'categoryId' => null,
        'categoryLayerId' => null,
        'targetProjectId' => null
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
    * projectId  项目32位ID，项目唯一标识。通过查询IPD项目列表获取，响应消息体中的id字段的值就是项目ID。
    * categoryId  工作项类型ID，工作项类型的唯一标识。 不同项目模型下可选值不同： - IPD-系统设备类：10021（RR）、10065（SF）、10020（IR）、10022（SR）、10029（AR）、10027（Task）、10033（Bug） - IPD-独立软件类：10021（RR）、10065（SF）、10020（IR）、10023（US）、10027（Task）、10033（Bug） - IPD-自运营软件/云服务类：10001（Epic）、10028（FE）、10021（RR）、10023（US）、10027（Task）、10033（Bug）
    * categoryLayerId  层级字段ID。用于过滤层级类型的字段，当需要按层级结构筛选字段时传入。
    * targetProjectId  目标项目32位ID，项目唯一标识。通过查询IPD项目列表获取，响应消息体中的id字段的值就是项目ID。当需要查询其他项目的字段配置时传入。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'categoryId' => 'category_id',
            'categoryLayerId' => 'category_layer_id',
            'targetProjectId' => 'target_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目32位ID，项目唯一标识。通过查询IPD项目列表获取，响应消息体中的id字段的值就是项目ID。
    * categoryId  工作项类型ID，工作项类型的唯一标识。 不同项目模型下可选值不同： - IPD-系统设备类：10021（RR）、10065（SF）、10020（IR）、10022（SR）、10029（AR）、10027（Task）、10033（Bug） - IPD-独立软件类：10021（RR）、10065（SF）、10020（IR）、10023（US）、10027（Task）、10033（Bug） - IPD-自运营软件/云服务类：10001（Epic）、10028（FE）、10021（RR）、10023（US）、10027（Task）、10033（Bug）
    * categoryLayerId  层级字段ID。用于过滤层级类型的字段，当需要按层级结构筛选字段时传入。
    * targetProjectId  目标项目32位ID，项目唯一标识。通过查询IPD项目列表获取，响应消息体中的id字段的值就是项目ID。当需要查询其他项目的字段配置时传入。
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'categoryId' => 'setCategoryId',
            'categoryLayerId' => 'setCategoryLayerId',
            'targetProjectId' => 'setTargetProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目32位ID，项目唯一标识。通过查询IPD项目列表获取，响应消息体中的id字段的值就是项目ID。
    * categoryId  工作项类型ID，工作项类型的唯一标识。 不同项目模型下可选值不同： - IPD-系统设备类：10021（RR）、10065（SF）、10020（IR）、10022（SR）、10029（AR）、10027（Task）、10033（Bug） - IPD-独立软件类：10021（RR）、10065（SF）、10020（IR）、10023（US）、10027（Task）、10033（Bug） - IPD-自运营软件/云服务类：10001（Epic）、10028（FE）、10021（RR）、10023（US）、10027（Task）、10033（Bug）
    * categoryLayerId  层级字段ID。用于过滤层级类型的字段，当需要按层级结构筛选字段时传入。
    * targetProjectId  目标项目32位ID，项目唯一标识。通过查询IPD项目列表获取，响应消息体中的id字段的值就是项目ID。当需要查询其他项目的字段配置时传入。
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'categoryId' => 'getCategoryId',
            'categoryLayerId' => 'getCategoryLayerId',
            'targetProjectId' => 'getTargetProjectId'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['categoryId'] = isset($data['categoryId']) ? $data['categoryId'] : null;
        $this->container['categoryLayerId'] = isset($data['categoryLayerId']) ? $data['categoryLayerId'] : null;
        $this->container['targetProjectId'] = isset($data['targetProjectId']) ? $data['targetProjectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['categoryId'] === null) {
            $invalidProperties[] = "'categoryId' can't be null";
        }
            if (!is_null($this->container['targetProjectId']) && (mb_strlen($this->container['targetProjectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'targetProjectId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['targetProjectId']) && (mb_strlen($this->container['targetProjectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'targetProjectId', the character length must be bigger than or equal to 32.";
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
    * Gets projectId
    *  项目32位ID，项目唯一标识。通过查询IPD项目列表获取，响应消息体中的id字段的值就是项目ID。
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
    * @param string $projectId 项目32位ID，项目唯一标识。通过查询IPD项目列表获取，响应消息体中的id字段的值就是项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets categoryId
    *  工作项类型ID，工作项类型的唯一标识。 不同项目模型下可选值不同： - IPD-系统设备类：10021（RR）、10065（SF）、10020（IR）、10022（SR）、10029（AR）、10027（Task）、10033（Bug） - IPD-独立软件类：10021（RR）、10065（SF）、10020（IR）、10023（US）、10027（Task）、10033（Bug） - IPD-自运营软件/云服务类：10001（Epic）、10028（FE）、10021（RR）、10023（US）、10027（Task）、10033（Bug）
    *
    * @return string
    */
    public function getCategoryId()
    {
        return $this->container['categoryId'];
    }

    /**
    * Sets categoryId
    *
    * @param string $categoryId 工作项类型ID，工作项类型的唯一标识。 不同项目模型下可选值不同： - IPD-系统设备类：10021（RR）、10065（SF）、10020（IR）、10022（SR）、10029（AR）、10027（Task）、10033（Bug） - IPD-独立软件类：10021（RR）、10065（SF）、10020（IR）、10023（US）、10027（Task）、10033（Bug） - IPD-自运营软件/云服务类：10001（Epic）、10028（FE）、10021（RR）、10023（US）、10027（Task）、10033（Bug）
    *
    * @return $this
    */
    public function setCategoryId($categoryId)
    {
        $this->container['categoryId'] = $categoryId;
        return $this;
    }

    /**
    * Gets categoryLayerId
    *  层级字段ID。用于过滤层级类型的字段，当需要按层级结构筛选字段时传入。
    *
    * @return string|null
    */
    public function getCategoryLayerId()
    {
        return $this->container['categoryLayerId'];
    }

    /**
    * Sets categoryLayerId
    *
    * @param string|null $categoryLayerId 层级字段ID。用于过滤层级类型的字段，当需要按层级结构筛选字段时传入。
    *
    * @return $this
    */
    public function setCategoryLayerId($categoryLayerId)
    {
        $this->container['categoryLayerId'] = $categoryLayerId;
        return $this;
    }

    /**
    * Gets targetProjectId
    *  目标项目32位ID，项目唯一标识。通过查询IPD项目列表获取，响应消息体中的id字段的值就是项目ID。当需要查询其他项目的字段配置时传入。
    *
    * @return string|null
    */
    public function getTargetProjectId()
    {
        return $this->container['targetProjectId'];
    }

    /**
    * Sets targetProjectId
    *
    * @param string|null $targetProjectId 目标项目32位ID，项目唯一标识。通过查询IPD项目列表获取，响应消息体中的id字段的值就是项目ID。当需要查询其他项目的字段配置时传入。
    *
    * @return $this
    */
    public function setTargetProjectId($targetProjectId)
    {
        $this->container['targetProjectId'] = $targetProjectId;
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

