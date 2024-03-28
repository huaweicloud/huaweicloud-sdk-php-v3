<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateCentralNetworkErRouteTableAttachment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateCentralNetworkErRouteTableAttachment';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  实例名字。
    * description  实例描述。不支持 <>。
    * enterpriseRouterId  资源ID标识符。
    * enterpriseRouterProjectId  实例所属项目ID。
    * enterpriseRouterRegionId  RegionID。
    * attachmentId  资源ID标识符。
    * enterpriseRouterTableId  资源ID标识符。
    * attachedErTableProjectId  实例所属项目ID。
    * attachedErTableRegionId  RegionID。
    * attachedErId  资源ID标识符。
    * attachedErTableId  资源ID标识符。
    * centralNetworkPlaneId  资源ID标识符。
    * hostedCloud  - HWCloud (华为云) - Ireland (爱尔兰)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'enterpriseRouterId' => 'string',
            'enterpriseRouterProjectId' => 'string',
            'enterpriseRouterRegionId' => 'string',
            'attachmentId' => 'string',
            'enterpriseRouterTableId' => 'string',
            'attachedErTableProjectId' => 'string',
            'attachedErTableRegionId' => 'string',
            'attachedErId' => 'string',
            'attachedErTableId' => 'string',
            'centralNetworkPlaneId' => 'string',
            'hostedCloud' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  实例名字。
    * description  实例描述。不支持 <>。
    * enterpriseRouterId  资源ID标识符。
    * enterpriseRouterProjectId  实例所属项目ID。
    * enterpriseRouterRegionId  RegionID。
    * attachmentId  资源ID标识符。
    * enterpriseRouterTableId  资源ID标识符。
    * attachedErTableProjectId  实例所属项目ID。
    * attachedErTableRegionId  RegionID。
    * attachedErId  资源ID标识符。
    * attachedErTableId  资源ID标识符。
    * centralNetworkPlaneId  资源ID标识符。
    * hostedCloud  - HWCloud (华为云) - Ireland (爱尔兰)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'enterpriseRouterId' => null,
        'enterpriseRouterProjectId' => null,
        'enterpriseRouterRegionId' => null,
        'attachmentId' => null,
        'enterpriseRouterTableId' => null,
        'attachedErTableProjectId' => null,
        'attachedErTableRegionId' => null,
        'attachedErId' => null,
        'attachedErTableId' => null,
        'centralNetworkPlaneId' => null,
        'hostedCloud' => null
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
    * enterpriseRouterId  资源ID标识符。
    * enterpriseRouterProjectId  实例所属项目ID。
    * enterpriseRouterRegionId  RegionID。
    * attachmentId  资源ID标识符。
    * enterpriseRouterTableId  资源ID标识符。
    * attachedErTableProjectId  实例所属项目ID。
    * attachedErTableRegionId  RegionID。
    * attachedErId  资源ID标识符。
    * attachedErTableId  资源ID标识符。
    * centralNetworkPlaneId  资源ID标识符。
    * hostedCloud  - HWCloud (华为云) - Ireland (爱尔兰)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'enterpriseRouterId' => 'enterprise_router_id',
            'enterpriseRouterProjectId' => 'enterprise_router_project_id',
            'enterpriseRouterRegionId' => 'enterprise_router_region_id',
            'attachmentId' => 'attachment_id',
            'enterpriseRouterTableId' => 'enterprise_router_table_id',
            'attachedErTableProjectId' => 'attached_er_table_project_id',
            'attachedErTableRegionId' => 'attached_er_table_region_id',
            'attachedErId' => 'attached_er_id',
            'attachedErTableId' => 'attached_er_table_id',
            'centralNetworkPlaneId' => 'central_network_plane_id',
            'hostedCloud' => 'hosted_cloud'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  实例名字。
    * description  实例描述。不支持 <>。
    * enterpriseRouterId  资源ID标识符。
    * enterpriseRouterProjectId  实例所属项目ID。
    * enterpriseRouterRegionId  RegionID。
    * attachmentId  资源ID标识符。
    * enterpriseRouterTableId  资源ID标识符。
    * attachedErTableProjectId  实例所属项目ID。
    * attachedErTableRegionId  RegionID。
    * attachedErId  资源ID标识符。
    * attachedErTableId  资源ID标识符。
    * centralNetworkPlaneId  资源ID标识符。
    * hostedCloud  - HWCloud (华为云) - Ireland (爱尔兰)
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'enterpriseRouterId' => 'setEnterpriseRouterId',
            'enterpriseRouterProjectId' => 'setEnterpriseRouterProjectId',
            'enterpriseRouterRegionId' => 'setEnterpriseRouterRegionId',
            'attachmentId' => 'setAttachmentId',
            'enterpriseRouterTableId' => 'setEnterpriseRouterTableId',
            'attachedErTableProjectId' => 'setAttachedErTableProjectId',
            'attachedErTableRegionId' => 'setAttachedErTableRegionId',
            'attachedErId' => 'setAttachedErId',
            'attachedErTableId' => 'setAttachedErTableId',
            'centralNetworkPlaneId' => 'setCentralNetworkPlaneId',
            'hostedCloud' => 'setHostedCloud'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  实例名字。
    * description  实例描述。不支持 <>。
    * enterpriseRouterId  资源ID标识符。
    * enterpriseRouterProjectId  实例所属项目ID。
    * enterpriseRouterRegionId  RegionID。
    * attachmentId  资源ID标识符。
    * enterpriseRouterTableId  资源ID标识符。
    * attachedErTableProjectId  实例所属项目ID。
    * attachedErTableRegionId  RegionID。
    * attachedErId  资源ID标识符。
    * attachedErTableId  资源ID标识符。
    * centralNetworkPlaneId  资源ID标识符。
    * hostedCloud  - HWCloud (华为云) - Ireland (爱尔兰)
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'enterpriseRouterId' => 'getEnterpriseRouterId',
            'enterpriseRouterProjectId' => 'getEnterpriseRouterProjectId',
            'enterpriseRouterRegionId' => 'getEnterpriseRouterRegionId',
            'attachmentId' => 'getAttachmentId',
            'enterpriseRouterTableId' => 'getEnterpriseRouterTableId',
            'attachedErTableProjectId' => 'getAttachedErTableProjectId',
            'attachedErTableRegionId' => 'getAttachedErTableRegionId',
            'attachedErId' => 'getAttachedErId',
            'attachedErTableId' => 'getAttachedErTableId',
            'centralNetworkPlaneId' => 'getCentralNetworkPlaneId',
            'hostedCloud' => 'getHostedCloud'
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
    const HOSTED_CLOUD_HW_CLOUD = 'HWCloud';
    const HOSTED_CLOUD_IRELAND = 'Ireland';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getHostedCloudAllowableValues()
    {
        return [
            self::HOSTED_CLOUD_HW_CLOUD,
            self::HOSTED_CLOUD_IRELAND,
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
        $this->container['enterpriseRouterId'] = isset($data['enterpriseRouterId']) ? $data['enterpriseRouterId'] : null;
        $this->container['enterpriseRouterProjectId'] = isset($data['enterpriseRouterProjectId']) ? $data['enterpriseRouterProjectId'] : null;
        $this->container['enterpriseRouterRegionId'] = isset($data['enterpriseRouterRegionId']) ? $data['enterpriseRouterRegionId'] : null;
        $this->container['attachmentId'] = isset($data['attachmentId']) ? $data['attachmentId'] : null;
        $this->container['enterpriseRouterTableId'] = isset($data['enterpriseRouterTableId']) ? $data['enterpriseRouterTableId'] : null;
        $this->container['attachedErTableProjectId'] = isset($data['attachedErTableProjectId']) ? $data['attachedErTableProjectId'] : null;
        $this->container['attachedErTableRegionId'] = isset($data['attachedErTableRegionId']) ? $data['attachedErTableRegionId'] : null;
        $this->container['attachedErId'] = isset($data['attachedErId']) ? $data['attachedErId'] : null;
        $this->container['attachedErTableId'] = isset($data['attachedErTableId']) ? $data['attachedErTableId'] : null;
        $this->container['centralNetworkPlaneId'] = isset($data['centralNetworkPlaneId']) ? $data['centralNetworkPlaneId'] : null;
        $this->container['hostedCloud'] = isset($data['hostedCloud']) ? $data['hostedCloud'] : null;
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
            if ((mb_strlen($this->container['enterpriseRouterId']) < 32)) {
                $invalidProperties[] = "invalid value for 'enterpriseRouterId', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}|[a-fA-F0-9]{32}/", $this->container['enterpriseRouterId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseRouterId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}|[a-fA-F0-9]{32}/.";
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
            if (!is_null($this->container['attachmentId']) && (mb_strlen($this->container['attachmentId']) > 36)) {
                $invalidProperties[] = "invalid value for 'attachmentId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['attachmentId']) && (mb_strlen($this->container['attachmentId']) < 32)) {
                $invalidProperties[] = "invalid value for 'attachmentId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['attachmentId']) && !preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}|[a-fA-F0-9]{32}/", $this->container['attachmentId'])) {
                $invalidProperties[] = "invalid value for 'attachmentId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}|[a-fA-F0-9]{32}/.";
            }
        if ($this->container['enterpriseRouterTableId'] === null) {
            $invalidProperties[] = "'enterpriseRouterTableId' can't be null";
        }
            if ((mb_strlen($this->container['enterpriseRouterTableId']) > 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseRouterTableId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['enterpriseRouterTableId']) < 32)) {
                $invalidProperties[] = "invalid value for 'enterpriseRouterTableId', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}|[a-fA-F0-9]{32}/", $this->container['enterpriseRouterTableId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseRouterTableId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}|[a-fA-F0-9]{32}/.";
            }
        if ($this->container['attachedErTableProjectId'] === null) {
            $invalidProperties[] = "'attachedErTableProjectId' can't be null";
        }
            if ((mb_strlen($this->container['attachedErTableProjectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'attachedErTableProjectId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['attachedErTableProjectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'attachedErTableProjectId', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/[a-fA-F0-9]{32}/", $this->container['attachedErTableProjectId'])) {
                $invalidProperties[] = "invalid value for 'attachedErTableProjectId', must be conform to the pattern /[a-fA-F0-9]{32}/.";
            }
        if ($this->container['attachedErTableRegionId'] === null) {
            $invalidProperties[] = "'attachedErTableRegionId' can't be null";
        }
            if ((mb_strlen($this->container['attachedErTableRegionId']) > 32)) {
                $invalidProperties[] = "invalid value for 'attachedErTableRegionId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['attachedErTableRegionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'attachedErTableRegionId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['attachedErId'] === null) {
            $invalidProperties[] = "'attachedErId' can't be null";
        }
            if ((mb_strlen($this->container['attachedErId']) > 36)) {
                $invalidProperties[] = "invalid value for 'attachedErId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['attachedErId']) < 32)) {
                $invalidProperties[] = "invalid value for 'attachedErId', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}|[a-fA-F0-9]{32}/", $this->container['attachedErId'])) {
                $invalidProperties[] = "invalid value for 'attachedErId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}|[a-fA-F0-9]{32}/.";
            }
        if ($this->container['attachedErTableId'] === null) {
            $invalidProperties[] = "'attachedErTableId' can't be null";
        }
            if ((mb_strlen($this->container['attachedErTableId']) > 36)) {
                $invalidProperties[] = "invalid value for 'attachedErTableId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['attachedErTableId']) < 32)) {
                $invalidProperties[] = "invalid value for 'attachedErTableId', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}|[a-fA-F0-9]{32}/", $this->container['attachedErTableId'])) {
                $invalidProperties[] = "invalid value for 'attachedErTableId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}|[a-fA-F0-9]{32}/.";
            }
        if ($this->container['centralNetworkPlaneId'] === null) {
            $invalidProperties[] = "'centralNetworkPlaneId' can't be null";
        }
            if ((mb_strlen($this->container['centralNetworkPlaneId']) > 36)) {
                $invalidProperties[] = "invalid value for 'centralNetworkPlaneId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['centralNetworkPlaneId']) < 32)) {
                $invalidProperties[] = "invalid value for 'centralNetworkPlaneId', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}|[a-fA-F0-9]{32}/", $this->container['centralNetworkPlaneId'])) {
                $invalidProperties[] = "invalid value for 'centralNetworkPlaneId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}|[a-fA-F0-9]{32}/.";
            }
        if ($this->container['hostedCloud'] === null) {
            $invalidProperties[] = "'hostedCloud' can't be null";
        }
            $allowedValues = $this->getHostedCloudAllowableValues();
                if (!is_null($this->container['hostedCloud']) && !in_array($this->container['hostedCloud'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'hostedCloud', must be one of '%s'",
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
    *  资源ID标识符。
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
    * @param string $enterpriseRouterId 资源ID标识符。
    *
    * @return $this
    */
    public function setEnterpriseRouterId($enterpriseRouterId)
    {
        $this->container['enterpriseRouterId'] = $enterpriseRouterId;
        return $this;
    }

    /**
    * Gets enterpriseRouterProjectId
    *  实例所属项目ID。
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
    * @param string $enterpriseRouterProjectId 实例所属项目ID。
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
    *  RegionID。
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
    * @param string $enterpriseRouterRegionId RegionID。
    *
    * @return $this
    */
    public function setEnterpriseRouterRegionId($enterpriseRouterRegionId)
    {
        $this->container['enterpriseRouterRegionId'] = $enterpriseRouterRegionId;
        return $this;
    }

    /**
    * Gets attachmentId
    *  资源ID标识符。
    *
    * @return string|null
    */
    public function getAttachmentId()
    {
        return $this->container['attachmentId'];
    }

    /**
    * Sets attachmentId
    *
    * @param string|null $attachmentId 资源ID标识符。
    *
    * @return $this
    */
    public function setAttachmentId($attachmentId)
    {
        $this->container['attachmentId'] = $attachmentId;
        return $this;
    }

    /**
    * Gets enterpriseRouterTableId
    *  资源ID标识符。
    *
    * @return string
    */
    public function getEnterpriseRouterTableId()
    {
        return $this->container['enterpriseRouterTableId'];
    }

    /**
    * Sets enterpriseRouterTableId
    *
    * @param string $enterpriseRouterTableId 资源ID标识符。
    *
    * @return $this
    */
    public function setEnterpriseRouterTableId($enterpriseRouterTableId)
    {
        $this->container['enterpriseRouterTableId'] = $enterpriseRouterTableId;
        return $this;
    }

    /**
    * Gets attachedErTableProjectId
    *  实例所属项目ID。
    *
    * @return string
    */
    public function getAttachedErTableProjectId()
    {
        return $this->container['attachedErTableProjectId'];
    }

    /**
    * Sets attachedErTableProjectId
    *
    * @param string $attachedErTableProjectId 实例所属项目ID。
    *
    * @return $this
    */
    public function setAttachedErTableProjectId($attachedErTableProjectId)
    {
        $this->container['attachedErTableProjectId'] = $attachedErTableProjectId;
        return $this;
    }

    /**
    * Gets attachedErTableRegionId
    *  RegionID。
    *
    * @return string
    */
    public function getAttachedErTableRegionId()
    {
        return $this->container['attachedErTableRegionId'];
    }

    /**
    * Sets attachedErTableRegionId
    *
    * @param string $attachedErTableRegionId RegionID。
    *
    * @return $this
    */
    public function setAttachedErTableRegionId($attachedErTableRegionId)
    {
        $this->container['attachedErTableRegionId'] = $attachedErTableRegionId;
        return $this;
    }

    /**
    * Gets attachedErId
    *  资源ID标识符。
    *
    * @return string
    */
    public function getAttachedErId()
    {
        return $this->container['attachedErId'];
    }

    /**
    * Sets attachedErId
    *
    * @param string $attachedErId 资源ID标识符。
    *
    * @return $this
    */
    public function setAttachedErId($attachedErId)
    {
        $this->container['attachedErId'] = $attachedErId;
        return $this;
    }

    /**
    * Gets attachedErTableId
    *  资源ID标识符。
    *
    * @return string
    */
    public function getAttachedErTableId()
    {
        return $this->container['attachedErTableId'];
    }

    /**
    * Sets attachedErTableId
    *
    * @param string $attachedErTableId 资源ID标识符。
    *
    * @return $this
    */
    public function setAttachedErTableId($attachedErTableId)
    {
        $this->container['attachedErTableId'] = $attachedErTableId;
        return $this;
    }

    /**
    * Gets centralNetworkPlaneId
    *  资源ID标识符。
    *
    * @return string
    */
    public function getCentralNetworkPlaneId()
    {
        return $this->container['centralNetworkPlaneId'];
    }

    /**
    * Sets centralNetworkPlaneId
    *
    * @param string $centralNetworkPlaneId 资源ID标识符。
    *
    * @return $this
    */
    public function setCentralNetworkPlaneId($centralNetworkPlaneId)
    {
        $this->container['centralNetworkPlaneId'] = $centralNetworkPlaneId;
        return $this;
    }

    /**
    * Gets hostedCloud
    *  - HWCloud (华为云) - Ireland (爱尔兰)
    *
    * @return string
    */
    public function getHostedCloud()
    {
        return $this->container['hostedCloud'];
    }

    /**
    * Sets hostedCloud
    *
    * @param string $hostedCloud - HWCloud (华为云) - Ireland (爱尔兰)
    *
    * @return $this
    */
    public function setHostedCloud($hostedCloud)
    {
        $this->container['hostedCloud'] = $hostedCloud;
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

