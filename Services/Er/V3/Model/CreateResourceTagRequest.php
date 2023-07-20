<?php

namespace HuaweiCloud\SDK\Er\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateResourceTagRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateResourceTagRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceId  资源ID
    * resourceType  标签资源类型: - instance: 企业路由器实例 - route-table: 路由表 - vpc-attachment: VPC连接 - vgw-attachment: 虚拟网关连接 - peering-attachment: 对等连接（Peering）连接 - vpn-attachment: VPN网关连接 -  -  -  -  - attachments: 所有连接类型
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceId' => 'string',
            'resourceType' => 'string',
            'body' => '\HuaweiCloud\SDK\Er\V3\Model\CreateResourceTagRequestBody'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceId  资源ID
    * resourceType  标签资源类型: - instance: 企业路由器实例 - route-table: 路由表 - vpc-attachment: VPC连接 - vgw-attachment: 虚拟网关连接 - peering-attachment: 对等连接（Peering）连接 - vpn-attachment: VPN网关连接 -  -  -  -  - attachments: 所有连接类型
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceId' => null,
        'resourceType' => null,
        'body' => null
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
    * resourceId  资源ID
    * resourceType  标签资源类型: - instance: 企业路由器实例 - route-table: 路由表 - vpc-attachment: VPC连接 - vgw-attachment: 虚拟网关连接 - peering-attachment: 对等连接（Peering）连接 - vpn-attachment: VPN网关连接 -  -  -  -  - attachments: 所有连接类型
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceId' => 'resource_id',
            'resourceType' => 'resource_type',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceId  资源ID
    * resourceType  标签资源类型: - instance: 企业路由器实例 - route-table: 路由表 - vpc-attachment: VPC连接 - vgw-attachment: 虚拟网关连接 - peering-attachment: 对等连接（Peering）连接 - vpn-attachment: VPN网关连接 -  -  -  -  - attachments: 所有连接类型
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceId' => 'setResourceId',
            'resourceType' => 'setResourceType',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceId  资源ID
    * resourceType  标签资源类型: - instance: 企业路由器实例 - route-table: 路由表 - vpc-attachment: VPC连接 - vgw-attachment: 虚拟网关连接 - peering-attachment: 对等连接（Peering）连接 - vpn-attachment: VPN网关连接 -  -  -  -  - attachments: 所有连接类型
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceId' => 'getResourceId',
            'resourceType' => 'getResourceType',
            'body' => 'getBody'
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
    const RESOURCE_TYPE_INSTANCE = 'instance';
    const RESOURCE_TYPE_ROUTE_TABLE = 'route-table';
    const RESOURCE_TYPE_VPC_ATTACHMENT = 'vpc-attachment';
    const RESOURCE_TYPE_DGW_ATTACHMENT = 'dgw-attachment';
    const RESOURCE_TYPE_VGW_ATTACHMENT = 'vgw-attachment';
    const RESOURCE_TYPE_PEERING_ATTACHMENT = 'peering-attachment';
    const RESOURCE_TYPE_VPN_ATTACHMENT = 'vpn-attachment';
    const RESOURCE_TYPE_CAN_ATTACHMENT = 'can-attachment';
    const RESOURCE_TYPE_ECN_ATTACHMENT = 'ecn-attachment';
    const RESOURCE_TYPE_GDGW_ATTACHMENT = 'gdgw-attachment';
    const RESOURCE_TYPE_CONNECT_ATTACHMENT = 'connect-attachment';
    const RESOURCE_TYPE_CFW_ATTACHMENT = 'cfw-attachment';
    const RESOURCE_TYPE_ATTACHMENTS = 'attachments';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getResourceTypeAllowableValues()
    {
        return [
            self::RESOURCE_TYPE_INSTANCE,
            self::RESOURCE_TYPE_ROUTE_TABLE,
            self::RESOURCE_TYPE_VPC_ATTACHMENT,
            self::RESOURCE_TYPE_DGW_ATTACHMENT,
            self::RESOURCE_TYPE_VGW_ATTACHMENT,
            self::RESOURCE_TYPE_PEERING_ATTACHMENT,
            self::RESOURCE_TYPE_VPN_ATTACHMENT,
            self::RESOURCE_TYPE_CAN_ATTACHMENT,
            self::RESOURCE_TYPE_ECN_ATTACHMENT,
            self::RESOURCE_TYPE_GDGW_ATTACHMENT,
            self::RESOURCE_TYPE_CONNECT_ATTACHMENT,
            self::RESOURCE_TYPE_CFW_ATTACHMENT,
            self::RESOURCE_TYPE_ATTACHMENTS,
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
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['resourceId'] === null) {
            $invalidProperties[] = "'resourceId' can't be null";
        }
            if (!preg_match("/[0-9a-fA-F]{8}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{12}/", $this->container['resourceId'])) {
                $invalidProperties[] = "invalid value for 'resourceId', must be conform to the pattern /[0-9a-fA-F]{8}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{12}/.";
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
    * Gets resourceId
    *  资源ID
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
    * @param string $resourceId 资源ID
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets resourceType
    *  标签资源类型: - instance: 企业路由器实例 - route-table: 路由表 - vpc-attachment: VPC连接 - vgw-attachment: 虚拟网关连接 - peering-attachment: 对等连接（Peering）连接 - vpn-attachment: VPN网关连接 -  -  -  -  - attachments: 所有连接类型
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
    * @param string $resourceType 标签资源类型: - instance: 企业路由器实例 - route-table: 路由表 - vpc-attachment: VPC连接 - vgw-attachment: 虚拟网关连接 - peering-attachment: 对等连接（Peering）连接 - vpn-attachment: VPN网关连接 -  -  -  -  - attachments: 所有连接类型
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\Er\V3\Model\CreateResourceTagRequestBody|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\Er\V3\Model\CreateResourceTagRequestBody|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

