<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RelatedDnVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RelatedDnVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  DN实例id。
    * instanceName  DN实例名称。
    * instanceStatus  DN实例状态。
    * dataVolumeSize  磁盘大小。
    * version  版本。
    * engineName  引擎名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'instanceName' => 'string',
            'instanceStatus' => 'string',
            'dataVolumeSize' => 'float',
            'version' => 'string',
            'engineName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  DN实例id。
    * instanceName  DN实例名称。
    * instanceStatus  DN实例状态。
    * dataVolumeSize  磁盘大小。
    * version  版本。
    * engineName  引擎名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'instanceName' => null,
        'instanceStatus' => null,
        'dataVolumeSize' => null,
        'version' => null,
        'engineName' => null
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
    * instanceId  DN实例id。
    * instanceName  DN实例名称。
    * instanceStatus  DN实例状态。
    * dataVolumeSize  磁盘大小。
    * version  版本。
    * engineName  引擎名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'instanceName' => 'instance_name',
            'instanceStatus' => 'instance_status',
            'dataVolumeSize' => 'data_volume_size',
            'version' => 'version',
            'engineName' => 'engine_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  DN实例id。
    * instanceName  DN实例名称。
    * instanceStatus  DN实例状态。
    * dataVolumeSize  磁盘大小。
    * version  版本。
    * engineName  引擎名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'instanceName' => 'setInstanceName',
            'instanceStatus' => 'setInstanceStatus',
            'dataVolumeSize' => 'setDataVolumeSize',
            'version' => 'setVersion',
            'engineName' => 'setEngineName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  DN实例id。
    * instanceName  DN实例名称。
    * instanceStatus  DN实例状态。
    * dataVolumeSize  磁盘大小。
    * version  版本。
    * engineName  引擎名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'instanceName' => 'getInstanceName',
            'instanceStatus' => 'getInstanceStatus',
            'dataVolumeSize' => 'getDataVolumeSize',
            'version' => 'getVersion',
            'engineName' => 'getEngineName'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['instanceStatus'] = isset($data['instanceStatus']) ? $data['instanceStatus'] : null;
        $this->container['dataVolumeSize'] = isset($data['dataVolumeSize']) ? $data['dataVolumeSize'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['engineName'] = isset($data['engineName']) ? $data['engineName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['instanceName']) && (mb_strlen($this->container['instanceName']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['instanceName']) && (mb_strlen($this->container['instanceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['instanceStatus']) && (mb_strlen($this->container['instanceStatus']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'instanceStatus', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['instanceStatus']) && (mb_strlen($this->container['instanceStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'instanceStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['dataVolumeSize']) && ($this->container['dataVolumeSize'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'dataVolumeSize', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['dataVolumeSize']) && ($this->container['dataVolumeSize'] < 1)) {
                $invalidProperties[] = "invalid value for 'dataVolumeSize', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 1)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['engineName']) && (mb_strlen($this->container['engineName']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'engineName', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['engineName']) && (mb_strlen($this->container['engineName']) < 1)) {
                $invalidProperties[] = "invalid value for 'engineName', the character length must be bigger than or equal to 1.";
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
    * Gets instanceId
    *  DN实例id。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId DN实例id。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceName
    *  DN实例名称。
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName DN实例名称。
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets instanceStatus
    *  DN实例状态。
    *
    * @return string|null
    */
    public function getInstanceStatus()
    {
        return $this->container['instanceStatus'];
    }

    /**
    * Sets instanceStatus
    *
    * @param string|null $instanceStatus DN实例状态。
    *
    * @return $this
    */
    public function setInstanceStatus($instanceStatus)
    {
        $this->container['instanceStatus'] = $instanceStatus;
        return $this;
    }

    /**
    * Gets dataVolumeSize
    *  磁盘大小。
    *
    * @return float|null
    */
    public function getDataVolumeSize()
    {
        return $this->container['dataVolumeSize'];
    }

    /**
    * Sets dataVolumeSize
    *
    * @param float|null $dataVolumeSize 磁盘大小。
    *
    * @return $this
    */
    public function setDataVolumeSize($dataVolumeSize)
    {
        $this->container['dataVolumeSize'] = $dataVolumeSize;
        return $this;
    }

    /**
    * Gets version
    *  版本。
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 版本。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets engineName
    *  引擎名称。
    *
    * @return string|null
    */
    public function getEngineName()
    {
        return $this->container['engineName'];
    }

    /**
    * Sets engineName
    *
    * @param string|null $engineName 引擎名称。
    *
    * @return $this
    */
    public function setEngineName($engineName)
    {
        $this->container['engineName'] = $engineName;
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

