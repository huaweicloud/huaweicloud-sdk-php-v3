<?php

namespace HuaweiCloud\SDK\Vpcep\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateEndpointRoutetableResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateEndpointRoutetableResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * routetables  路由表ID列表。 若未指定，返回默认VPC下路由表ID。 更新Gateway类型终端节点服务的终端节点时，显示此参数。
    * error  当修改终端节点子网路由表失败时，返回错误提示信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'routetables' => 'string[]',
            'error' => '\HuaweiCloud\SDK\Vpcep\V1\Model\RoutetableInfoError[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * routetables  路由表ID列表。 若未指定，返回默认VPC下路由表ID。 更新Gateway类型终端节点服务的终端节点时，显示此参数。
    * error  当修改终端节点子网路由表失败时，返回错误提示信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'routetables' => null,
        'error' => null
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
    * routetables  路由表ID列表。 若未指定，返回默认VPC下路由表ID。 更新Gateway类型终端节点服务的终端节点时，显示此参数。
    * error  当修改终端节点子网路由表失败时，返回错误提示信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'routetables' => 'routetables',
            'error' => 'error'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * routetables  路由表ID列表。 若未指定，返回默认VPC下路由表ID。 更新Gateway类型终端节点服务的终端节点时，显示此参数。
    * error  当修改终端节点子网路由表失败时，返回错误提示信息
    *
    * @var string[]
    */
    protected static $setters = [
            'routetables' => 'setRoutetables',
            'error' => 'setError'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * routetables  路由表ID列表。 若未指定，返回默认VPC下路由表ID。 更新Gateway类型终端节点服务的终端节点时，显示此参数。
    * error  当修改终端节点子网路由表失败时，返回错误提示信息
    *
    * @var string[]
    */
    protected static $getters = [
            'routetables' => 'getRoutetables',
            'error' => 'getError'
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
        $this->container['routetables'] = isset($data['routetables']) ? $data['routetables'] : null;
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets routetables
    *  路由表ID列表。 若未指定，返回默认VPC下路由表ID。 更新Gateway类型终端节点服务的终端节点时，显示此参数。
    *
    * @return string[]|null
    */
    public function getRoutetables()
    {
        return $this->container['routetables'];
    }

    /**
    * Sets routetables
    *
    * @param string[]|null $routetables 路由表ID列表。 若未指定，返回默认VPC下路由表ID。 更新Gateway类型终端节点服务的终端节点时，显示此参数。
    *
    * @return $this
    */
    public function setRoutetables($routetables)
    {
        $this->container['routetables'] = $routetables;
        return $this;
    }

    /**
    * Gets error
    *  当修改终端节点子网路由表失败时，返回错误提示信息
    *
    * @return \HuaweiCloud\SDK\Vpcep\V1\Model\RoutetableInfoError[]|null
    */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
    * Sets error
    *
    * @param \HuaweiCloud\SDK\Vpcep\V1\Model\RoutetableInfoError[]|null $error 当修改终端节点子网路由表失败时，返回错误提示信息
    *
    * @return $this
    */
    public function setError($error)
    {
        $this->container['error'] = $error;
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

