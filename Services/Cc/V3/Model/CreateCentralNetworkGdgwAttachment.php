<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateCentralNetworkGdgwAttachment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateCentralNetworkGdgwAttachment';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  实例名字。
    * description  实例描述。不支持 <>。
    * enterpriseRouterId  企业路由器的ID。
    * globalDcGatewayId  Gdgw的ID。
    * globalDcGatewayProjectId  Gdgw的项目ID。
    * globalDcGatewayRegionId  Gdgw的RegionID。
    * enterpriseRouterProjectId  企业路由器的项目ID。
    * enterpriseRouterRegionId  ER路由器的regionID。
    * centralNetworkPlaneId  中心网络平面ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'enterpriseRouterId' => 'string',
            'globalDcGatewayId' => 'string',
            'globalDcGatewayProjectId' => 'string',
            'globalDcGatewayRegionId' => 'string',
            'enterpriseRouterProjectId' => 'string',
            'enterpriseRouterRegionId' => 'string',
            'centralNetworkPlaneId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  实例名字。
    * description  实例描述。不支持 <>。
    * enterpriseRouterId  企业路由器的ID。
    * globalDcGatewayId  Gdgw的ID。
    * globalDcGatewayProjectId  Gdgw的项目ID。
    * globalDcGatewayRegionId  Gdgw的RegionID。
    * enterpriseRouterProjectId  企业路由器的项目ID。
    * enterpriseRouterRegionId  ER路由器的regionID。
    * centralNetworkPlaneId  中心网络平面ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'enterpriseRouterId' => null,
        'globalDcGatewayId' => null,
        'globalDcGatewayProjectId' => null,
        'globalDcGatewayRegionId' => null,
        'enterpriseRouterProjectId' => null,
        'enterpriseRouterRegionId' => null,
        'centralNetworkPlaneId' => null
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
    * name  实例名字。
    * description  实例描述。不支持 <>。
    * enterpriseRouterId  企业路由器的ID。
    * globalDcGatewayId  Gdgw的ID。
    * globalDcGatewayProjectId  Gdgw的项目ID。
    * globalDcGatewayRegionId  Gdgw的RegionID。
    * enterpriseRouterProjectId  企业路由器的项目ID。
    * enterpriseRouterRegionId  ER路由器的regionID。
    * centralNetworkPlaneId  中心网络平面ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'enterpriseRouterId' => 'enterprise_router_id',
            'globalDcGatewayId' => 'global_dc_gateway_id',
            'globalDcGatewayProjectId' => 'global_dc_gateway_project_id',
            'globalDcGatewayRegionId' => 'global_dc_gateway_region_id',
            'enterpriseRouterProjectId' => 'enterprise_router_project_id',
            'enterpriseRouterRegionId' => 'enterprise_router_region_id',
            'centralNetworkPlaneId' => 'central_network_plane_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  实例名字。
    * description  实例描述。不支持 <>。
    * enterpriseRouterId  企业路由器的ID。
    * globalDcGatewayId  Gdgw的ID。
    * globalDcGatewayProjectId  Gdgw的项目ID。
    * globalDcGatewayRegionId  Gdgw的RegionID。
    * enterpriseRouterProjectId  企业路由器的项目ID。
    * enterpriseRouterRegionId  ER路由器的regionID。
    * centralNetworkPlaneId  中心网络平面ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'enterpriseRouterId' => 'setEnterpriseRouterId',
            'globalDcGatewayId' => 'setGlobalDcGatewayId',
            'globalDcGatewayProjectId' => 'setGlobalDcGatewayProjectId',
            'globalDcGatewayRegionId' => 'setGlobalDcGatewayRegionId',
            'enterpriseRouterProjectId' => 'setEnterpriseRouterProjectId',
            'enterpriseRouterRegionId' => 'setEnterpriseRouterRegionId',
            'centralNetworkPlaneId' => 'setCentralNetworkPlaneId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  实例名字。
    * description  实例描述。不支持 <>。
    * enterpriseRouterId  企业路由器的ID。
    * globalDcGatewayId  Gdgw的ID。
    * globalDcGatewayProjectId  Gdgw的项目ID。
    * globalDcGatewayRegionId  Gdgw的RegionID。
    * enterpriseRouterProjectId  企业路由器的项目ID。
    * enterpriseRouterRegionId  ER路由器的regionID。
    * centralNetworkPlaneId  中心网络平面ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'enterpriseRouterId' => 'getEnterpriseRouterId',
            'globalDcGatewayId' => 'getGlobalDcGatewayId',
            'globalDcGatewayProjectId' => 'getGlobalDcGatewayProjectId',
            'globalDcGatewayRegionId' => 'getGlobalDcGatewayRegionId',
            'enterpriseRouterProjectId' => 'getEnterpriseRouterProjectId',
            'enterpriseRouterRegionId' => 'getEnterpriseRouterRegionId',
            'centralNetworkPlaneId' => 'getCentralNetworkPlaneId'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['enterpriseRouterId'] = isset($data['enterpriseRouterId']) ? $data['enterpriseRouterId'] : null;
        $this->container['globalDcGatewayId'] = isset($data['globalDcGatewayId']) ? $data['globalDcGatewayId'] : null;
        $this->container['globalDcGatewayProjectId'] = isset($data['globalDcGatewayProjectId']) ? $data['globalDcGatewayProjectId'] : null;
        $this->container['globalDcGatewayRegionId'] = isset($data['globalDcGatewayRegionId']) ? $data['globalDcGatewayRegionId'] : null;
        $this->container['enterpriseRouterProjectId'] = isset($data['enterpriseRouterProjectId']) ? $data['enterpriseRouterProjectId'] : null;
        $this->container['enterpriseRouterRegionId'] = isset($data['enterpriseRouterRegionId']) ? $data['enterpriseRouterRegionId'] : null;
        $this->container['centralNetworkPlaneId'] = isset($data['centralNetworkPlaneId']) ? $data['centralNetworkPlaneId'] : null;
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
            if (!preg_match("/^[\\u4e00-\\u9fa50-9a-zA-Z_.\\-]+$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[\\u4e00-\\u9fa50-9a-zA-Z_.\\-]+$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^[^<>]*$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[^<>]*$/.";
            }
        if ($this->container['enterpriseRouterId'] === null) {
            $invalidProperties[] = "'enterpriseRouterId' can't be null";
        }
            if ((mb_strlen($this->container['enterpriseRouterId']) > 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseRouterId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['enterpriseRouterId']) < 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseRouterId', the character length must be bigger than or equal to 36.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['enterpriseRouterId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseRouterId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
        if ($this->container['globalDcGatewayId'] === null) {
            $invalidProperties[] = "'globalDcGatewayId' can't be null";
        }
            if ((mb_strlen($this->container['globalDcGatewayId']) > 36)) {
                $invalidProperties[] = "invalid value for 'globalDcGatewayId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['globalDcGatewayId']) < 36)) {
                $invalidProperties[] = "invalid value for 'globalDcGatewayId', the character length must be bigger than or equal to 36.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['globalDcGatewayId'])) {
                $invalidProperties[] = "invalid value for 'globalDcGatewayId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
        if ($this->container['globalDcGatewayProjectId'] === null) {
            $invalidProperties[] = "'globalDcGatewayProjectId' can't be null";
        }
            if ((mb_strlen($this->container['globalDcGatewayProjectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'globalDcGatewayProjectId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['globalDcGatewayProjectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'globalDcGatewayProjectId', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/[a-fA-F0-9]{32}/", $this->container['globalDcGatewayProjectId'])) {
                $invalidProperties[] = "invalid value for 'globalDcGatewayProjectId', must be conform to the pattern /[a-fA-F0-9]{32}/.";
            }
        if ($this->container['globalDcGatewayRegionId'] === null) {
            $invalidProperties[] = "'globalDcGatewayRegionId' can't be null";
        }
            if ((mb_strlen($this->container['globalDcGatewayRegionId']) > 32)) {
                $invalidProperties[] = "invalid value for 'globalDcGatewayRegionId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['globalDcGatewayRegionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'globalDcGatewayRegionId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['enterpriseRouterProjectId'] === null) {
            $invalidProperties[] = "'enterpriseRouterProjectId' can't be null";
        }
            if ((mb_strlen($this->container['enterpriseRouterProjectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'enterpriseRouterProjectId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['enterpriseRouterProjectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'enterpriseRouterProjectId', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/[a-fA-F0-9]{32}/", $this->container['enterpriseRouterProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseRouterProjectId', must be conform to the pattern /[a-fA-F0-9]{32}/.";
            }
        if ($this->container['enterpriseRouterRegionId'] === null) {
            $invalidProperties[] = "'enterpriseRouterRegionId' can't be null";
        }
            if ((mb_strlen($this->container['enterpriseRouterRegionId']) > 32)) {
                $invalidProperties[] = "invalid value for 'enterpriseRouterRegionId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['enterpriseRouterRegionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseRouterRegionId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['centralNetworkPlaneId']) && (mb_strlen($this->container['centralNetworkPlaneId']) > 36)) {
                $invalidProperties[] = "invalid value for 'centralNetworkPlaneId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['centralNetworkPlaneId']) && (mb_strlen($this->container['centralNetworkPlaneId']) < 36)) {
                $invalidProperties[] = "invalid value for 'centralNetworkPlaneId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['centralNetworkPlaneId']) && !preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['centralNetworkPlaneId'])) {
                $invalidProperties[] = "invalid value for 'centralNetworkPlaneId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
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
    *  实例名字。
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
    * @param string $name 实例名字。
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
    *  实例描述。不支持 <>。
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
    * @param string|null $description 实例描述。不支持 <>。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets enterpriseRouterId
    *  企业路由器的ID。
    *
    * @return string
    */
    public function getEnterpriseRouterId()
    {
        return $this->container['enterpriseRouterId'];
    }

    /**
    * Sets enterpriseRouterId
    *
    * @param string $enterpriseRouterId 企业路由器的ID。
    *
    * @return $this
    */
    public function setEnterpriseRouterId($enterpriseRouterId)
    {
        $this->container['enterpriseRouterId'] = $enterpriseRouterId;
        return $this;
    }

    /**
    * Gets globalDcGatewayId
    *  Gdgw的ID。
    *
    * @return string
    */
    public function getGlobalDcGatewayId()
    {
        return $this->container['globalDcGatewayId'];
    }

    /**
    * Sets globalDcGatewayId
    *
    * @param string $globalDcGatewayId Gdgw的ID。
    *
    * @return $this
    */
    public function setGlobalDcGatewayId($globalDcGatewayId)
    {
        $this->container['globalDcGatewayId'] = $globalDcGatewayId;
        return $this;
    }

    /**
    * Gets globalDcGatewayProjectId
    *  Gdgw的项目ID。
    *
    * @return string
    */
    public function getGlobalDcGatewayProjectId()
    {
        return $this->container['globalDcGatewayProjectId'];
    }

    /**
    * Sets globalDcGatewayProjectId
    *
    * @param string $globalDcGatewayProjectId Gdgw的项目ID。
    *
    * @return $this
    */
    public function setGlobalDcGatewayProjectId($globalDcGatewayProjectId)
    {
        $this->container['globalDcGatewayProjectId'] = $globalDcGatewayProjectId;
        return $this;
    }

    /**
    * Gets globalDcGatewayRegionId
    *  Gdgw的RegionID。
    *
    * @return string
    */
    public function getGlobalDcGatewayRegionId()
    {
        return $this->container['globalDcGatewayRegionId'];
    }

    /**
    * Sets globalDcGatewayRegionId
    *
    * @param string $globalDcGatewayRegionId Gdgw的RegionID。
    *
    * @return $this
    */
    public function setGlobalDcGatewayRegionId($globalDcGatewayRegionId)
    {
        $this->container['globalDcGatewayRegionId'] = $globalDcGatewayRegionId;
        return $this;
    }

    /**
    * Gets enterpriseRouterProjectId
    *  企业路由器的项目ID。
    *
    * @return string
    */
    public function getEnterpriseRouterProjectId()
    {
        return $this->container['enterpriseRouterProjectId'];
    }

    /**
    * Sets enterpriseRouterProjectId
    *
    * @param string $enterpriseRouterProjectId 企业路由器的项目ID。
    *
    * @return $this
    */
    public function setEnterpriseRouterProjectId($enterpriseRouterProjectId)
    {
        $this->container['enterpriseRouterProjectId'] = $enterpriseRouterProjectId;
        return $this;
    }

    /**
    * Gets enterpriseRouterRegionId
    *  ER路由器的regionID。
    *
    * @return string
    */
    public function getEnterpriseRouterRegionId()
    {
        return $this->container['enterpriseRouterRegionId'];
    }

    /**
    * Sets enterpriseRouterRegionId
    *
    * @param string $enterpriseRouterRegionId ER路由器的regionID。
    *
    * @return $this
    */
    public function setEnterpriseRouterRegionId($enterpriseRouterRegionId)
    {
        $this->container['enterpriseRouterRegionId'] = $enterpriseRouterRegionId;
        return $this;
    }

    /**
    * Gets centralNetworkPlaneId
    *  中心网络平面ID。
    *
    * @return string|null
    */
    public function getCentralNetworkPlaneId()
    {
        return $this->container['centralNetworkPlaneId'];
    }

    /**
    * Sets centralNetworkPlaneId
    *
    * @param string|null $centralNetworkPlaneId 中心网络平面ID。
    *
    * @return $this
    */
    public function setCentralNetworkPlaneId($centralNetworkPlaneId)
    {
        $this->container['centralNetworkPlaneId'] = $centralNetworkPlaneId;
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

