<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeploymentGroupUpdateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeploymentGroupUpdateRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  主机集群名
    * description  描述
    * slaveClusterId  自定义slave资源池id
    * autoConnectionTestSwitch  自动连通性验证 0不执行 1每日 2每周
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'slaveClusterId' => 'string',
            'autoConnectionTestSwitch' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  主机集群名
    * description  描述
    * slaveClusterId  自定义slave资源池id
    * autoConnectionTestSwitch  自动连通性验证 0不执行 1每日 2每周
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'slaveClusterId' => null,
        'autoConnectionTestSwitch' => 'int32'
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
    * name  主机集群名
    * description  描述
    * slaveClusterId  自定义slave资源池id
    * autoConnectionTestSwitch  自动连通性验证 0不执行 1每日 2每周
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'slaveClusterId' => 'slave_cluster_id',
            'autoConnectionTestSwitch' => 'auto_connection_test_switch'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  主机集群名
    * description  描述
    * slaveClusterId  自定义slave资源池id
    * autoConnectionTestSwitch  自动连通性验证 0不执行 1每日 2每周
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'slaveClusterId' => 'setSlaveClusterId',
            'autoConnectionTestSwitch' => 'setAutoConnectionTestSwitch'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  主机集群名
    * description  描述
    * slaveClusterId  自定义slave资源池id
    * autoConnectionTestSwitch  自动连通性验证 0不执行 1每日 2每周
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'slaveClusterId' => 'getSlaveClusterId',
            'autoConnectionTestSwitch' => 'getAutoConnectionTestSwitch'
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
    const AUTO_CONNECTION_TEST_SWITCH_0 = 0;
    const AUTO_CONNECTION_TEST_SWITCH_1 = 1;
    const AUTO_CONNECTION_TEST_SWITCH_2 = 2;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAutoConnectionTestSwitchAllowableValues()
    {
        return [
            self::AUTO_CONNECTION_TEST_SWITCH_0,
            self::AUTO_CONNECTION_TEST_SWITCH_1,
            self::AUTO_CONNECTION_TEST_SWITCH_2,
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
        $this->container['slaveClusterId'] = isset($data['slaveClusterId']) ? $data['slaveClusterId'] : null;
        $this->container['autoConnectionTestSwitch'] = isset($data['autoConnectionTestSwitch']) ? $data['autoConnectionTestSwitch'] : null;
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
            if ((mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['name']) < 3)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 500)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['slaveClusterId']) && !preg_match("/^[A-Za-z0-9]{1,32}$/", $this->container['slaveClusterId'])) {
                $invalidProperties[] = "invalid value for 'slaveClusterId', must be conform to the pattern /^[A-Za-z0-9]{1,32}$/.";
            }
            $allowedValues = $this->getAutoConnectionTestSwitchAllowableValues();
                if (!is_null($this->container['autoConnectionTestSwitch']) && !in_array($this->container['autoConnectionTestSwitch'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'autoConnectionTestSwitch', must be one of '%s'",
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
    *  主机集群名
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
    * @param string $name 主机集群名
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
    *  描述
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
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets slaveClusterId
    *  自定义slave资源池id
    *
    * @return string|null
    */
    public function getSlaveClusterId()
    {
        return $this->container['slaveClusterId'];
    }

    /**
    * Sets slaveClusterId
    *
    * @param string|null $slaveClusterId 自定义slave资源池id
    *
    * @return $this
    */
    public function setSlaveClusterId($slaveClusterId)
    {
        $this->container['slaveClusterId'] = $slaveClusterId;
        return $this;
    }

    /**
    * Gets autoConnectionTestSwitch
    *  自动连通性验证 0不执行 1每日 2每周
    *
    * @return int|null
    */
    public function getAutoConnectionTestSwitch()
    {
        return $this->container['autoConnectionTestSwitch'];
    }

    /**
    * Sets autoConnectionTestSwitch
    *
    * @param int|null $autoConnectionTestSwitch 自动连通性验证 0不执行 1每日 2每周
    *
    * @return $this
    */
    public function setAutoConnectionTestSwitch($autoConnectionTestSwitch)
    {
        $this->container['autoConnectionTestSwitch'] = $autoConnectionTestSwitch;
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

