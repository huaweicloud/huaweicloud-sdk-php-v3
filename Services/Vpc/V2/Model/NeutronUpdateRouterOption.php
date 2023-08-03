<?php

namespace HuaweiCloud\SDK\Vpc\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NeutronUpdateRouterOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NeutronUpdateRouterOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  功能说明：路由器的名称。 取值范围：0-64个字符，仅支持数字、字母、中文、_(下划线)、-（中划线）、.（点）。 约束：如果name非空，则name不能重复。
    * adminStateUp  功能说明：资源的管理状态。 取值范围：true、false 约束：只支持true
    * externalGatewayInfo  externalGatewayInfo
    * routes  功能说明：路由信息，见ListRoute详细说明
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'adminStateUp' => 'bool',
            'externalGatewayInfo' => '\HuaweiCloud\SDK\Vpc\V2\Model\ExternalGatewayInfoOption',
            'routes' => '\HuaweiCloud\SDK\Vpc\V2\Model\Route[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  功能说明：路由器的名称。 取值范围：0-64个字符，仅支持数字、字母、中文、_(下划线)、-（中划线）、.（点）。 约束：如果name非空，则name不能重复。
    * adminStateUp  功能说明：资源的管理状态。 取值范围：true、false 约束：只支持true
    * externalGatewayInfo  externalGatewayInfo
    * routes  功能说明：路由信息，见ListRoute详细说明
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'adminStateUp' => null,
        'externalGatewayInfo' => null,
        'routes' => null
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
    * name  功能说明：路由器的名称。 取值范围：0-64个字符，仅支持数字、字母、中文、_(下划线)、-（中划线）、.（点）。 约束：如果name非空，则name不能重复。
    * adminStateUp  功能说明：资源的管理状态。 取值范围：true、false 约束：只支持true
    * externalGatewayInfo  externalGatewayInfo
    * routes  功能说明：路由信息，见ListRoute详细说明
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'adminStateUp' => 'admin_state_up',
            'externalGatewayInfo' => 'external_gateway_info',
            'routes' => 'routes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  功能说明：路由器的名称。 取值范围：0-64个字符，仅支持数字、字母、中文、_(下划线)、-（中划线）、.（点）。 约束：如果name非空，则name不能重复。
    * adminStateUp  功能说明：资源的管理状态。 取值范围：true、false 约束：只支持true
    * externalGatewayInfo  externalGatewayInfo
    * routes  功能说明：路由信息，见ListRoute详细说明
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'adminStateUp' => 'setAdminStateUp',
            'externalGatewayInfo' => 'setExternalGatewayInfo',
            'routes' => 'setRoutes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  功能说明：路由器的名称。 取值范围：0-64个字符，仅支持数字、字母、中文、_(下划线)、-（中划线）、.（点）。 约束：如果name非空，则name不能重复。
    * adminStateUp  功能说明：资源的管理状态。 取值范围：true、false 约束：只支持true
    * externalGatewayInfo  externalGatewayInfo
    * routes  功能说明：路由信息，见ListRoute详细说明
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'adminStateUp' => 'getAdminStateUp',
            'externalGatewayInfo' => 'getExternalGatewayInfo',
            'routes' => 'getRoutes'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['externalGatewayInfo'] = isset($data['externalGatewayInfo']) ? $data['externalGatewayInfo'] : null;
        $this->container['routes'] = isset($data['routes']) ? $data['routes'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
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
    *  功能说明：路由器的名称。 取值范围：0-64个字符，仅支持数字、字母、中文、_(下划线)、-（中划线）、.（点）。 约束：如果name非空，则name不能重复。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 功能说明：路由器的名称。 取值范围：0-64个字符，仅支持数字、字母、中文、_(下划线)、-（中划线）、.（点）。 约束：如果name非空，则name不能重复。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  功能说明：资源的管理状态。 取值范围：true、false 约束：只支持true
    *
    * @return bool|null
    */
    public function getAdminStateUp()
    {
        return $this->container['adminStateUp'];
    }

    /**
    * Sets adminStateUp
    *
    * @param bool|null $adminStateUp 功能说明：资源的管理状态。 取值范围：true、false 约束：只支持true
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets externalGatewayInfo
    *  externalGatewayInfo
    *
    * @return \HuaweiCloud\SDK\Vpc\V2\Model\ExternalGatewayInfoOption|null
    */
    public function getExternalGatewayInfo()
    {
        return $this->container['externalGatewayInfo'];
    }

    /**
    * Sets externalGatewayInfo
    *
    * @param \HuaweiCloud\SDK\Vpc\V2\Model\ExternalGatewayInfoOption|null $externalGatewayInfo externalGatewayInfo
    *
    * @return $this
    */
    public function setExternalGatewayInfo($externalGatewayInfo)
    {
        $this->container['externalGatewayInfo'] = $externalGatewayInfo;
        return $this;
    }

    /**
    * Gets routes
    *  功能说明：路由信息，见ListRoute详细说明
    *
    * @return \HuaweiCloud\SDK\Vpc\V2\Model\Route[]|null
    */
    public function getRoutes()
    {
        return $this->container['routes'];
    }

    /**
    * Sets routes
    *
    * @param \HuaweiCloud\SDK\Vpc\V2\Model\Route[]|null $routes 功能说明：路由信息，见ListRoute详细说明
    *
    * @return $this
    */
    public function setRoutes($routes)
    {
        $this->container['routes'] = $routes;
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

