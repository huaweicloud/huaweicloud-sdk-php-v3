<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateClusterReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateClusterReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterName  新建的集群名称，名称只能包含数字、英文字母和下划线，但不能是纯数字，且不能以下划线开头。长度限制：1~128个字符。 说明：集群名称不区分大小写，系统会自动转换为小写。
    * description  集群的描述信息。
    * flavorId  集群规格。
    * chargeMode  集群的收费模式。只能设置为“1”，表示按照CU时收费。
    * cidrInVpc  队列的虚拟私有云（VPC）的网段。建议使用网段：10.0.0.0/8~28，172.16.0.0/12~28，192.168.0.0/16~28。
    * workspaces  集群需要绑定的工作空间ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterName' => 'string',
            'description' => 'string',
            'flavorId' => 'string',
            'chargeMode' => 'int',
            'cidrInVpc' => 'string',
            'workspaces' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterName  新建的集群名称，名称只能包含数字、英文字母和下划线，但不能是纯数字，且不能以下划线开头。长度限制：1~128个字符。 说明：集群名称不区分大小写，系统会自动转换为小写。
    * description  集群的描述信息。
    * flavorId  集群规格。
    * chargeMode  集群的收费模式。只能设置为“1”，表示按照CU时收费。
    * cidrInVpc  队列的虚拟私有云（VPC）的网段。建议使用网段：10.0.0.0/8~28，172.16.0.0/12~28，192.168.0.0/16~28。
    * workspaces  集群需要绑定的工作空间ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterName' => null,
        'description' => null,
        'flavorId' => null,
        'chargeMode' => 'int32',
        'cidrInVpc' => null,
        'workspaces' => null
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
    * clusterName  新建的集群名称，名称只能包含数字、英文字母和下划线，但不能是纯数字，且不能以下划线开头。长度限制：1~128个字符。 说明：集群名称不区分大小写，系统会自动转换为小写。
    * description  集群的描述信息。
    * flavorId  集群规格。
    * chargeMode  集群的收费模式。只能设置为“1”，表示按照CU时收费。
    * cidrInVpc  队列的虚拟私有云（VPC）的网段。建议使用网段：10.0.0.0/8~28，172.16.0.0/12~28，192.168.0.0/16~28。
    * workspaces  集群需要绑定的工作空间ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterName' => 'cluster_name',
            'description' => 'description',
            'flavorId' => 'flavor_id',
            'chargeMode' => 'charge_mode',
            'cidrInVpc' => 'cidr_in_vpc',
            'workspaces' => 'workspaces'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterName  新建的集群名称，名称只能包含数字、英文字母和下划线，但不能是纯数字，且不能以下划线开头。长度限制：1~128个字符。 说明：集群名称不区分大小写，系统会自动转换为小写。
    * description  集群的描述信息。
    * flavorId  集群规格。
    * chargeMode  集群的收费模式。只能设置为“1”，表示按照CU时收费。
    * cidrInVpc  队列的虚拟私有云（VPC）的网段。建议使用网段：10.0.0.0/8~28，172.16.0.0/12~28，192.168.0.0/16~28。
    * workspaces  集群需要绑定的工作空间ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterName' => 'setClusterName',
            'description' => 'setDescription',
            'flavorId' => 'setFlavorId',
            'chargeMode' => 'setChargeMode',
            'cidrInVpc' => 'setCidrInVpc',
            'workspaces' => 'setWorkspaces'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterName  新建的集群名称，名称只能包含数字、英文字母和下划线，但不能是纯数字，且不能以下划线开头。长度限制：1~128个字符。 说明：集群名称不区分大小写，系统会自动转换为小写。
    * description  集群的描述信息。
    * flavorId  集群规格。
    * chargeMode  集群的收费模式。只能设置为“1”，表示按照CU时收费。
    * cidrInVpc  队列的虚拟私有云（VPC）的网段。建议使用网段：10.0.0.0/8~28，172.16.0.0/12~28，192.168.0.0/16~28。
    * workspaces  集群需要绑定的工作空间ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterName' => 'getClusterName',
            'description' => 'getDescription',
            'flavorId' => 'getFlavorId',
            'chargeMode' => 'getChargeMode',
            'cidrInVpc' => 'getCidrInVpc',
            'workspaces' => 'getWorkspaces'
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
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['flavorId'] = isset($data['flavorId']) ? $data['flavorId'] : null;
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
        $this->container['cidrInVpc'] = isset($data['cidrInVpc']) ? $data['cidrInVpc'] : null;
        $this->container['workspaces'] = isset($data['workspaces']) ? $data['workspaces'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['clusterName'] === null) {
            $invalidProperties[] = "'clusterName' can't be null";
        }
            if ((mb_strlen($this->container['clusterName']) > 128)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['clusterName']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^(?![0-9]+$)(?![a-z]+$)[a-z0-9][a-z0-9_]{1,128}$/", $this->container['clusterName'])) {
                $invalidProperties[] = "invalid value for 'clusterName', must be conform to the pattern /^(?![0-9]+$)(?![a-z]+$)[a-z0-9][a-z0-9_]{1,128}$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 128)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 128.";
            }
        if ($this->container['flavorId'] === null) {
            $invalidProperties[] = "'flavorId' can't be null";
        }
            if ((mb_strlen($this->container['flavorId']) > 64)) {
                $invalidProperties[] = "invalid value for 'flavorId', the character length must be smaller than or equal to 64.";
            }
            if (!preg_match("/^[a-zA-Z0-9\\-]+$/", $this->container['flavorId'])) {
                $invalidProperties[] = "invalid value for 'flavorId', must be conform to the pattern /^[a-zA-Z0-9\\-]+$/.";
            }
        if ($this->container['chargeMode'] === null) {
            $invalidProperties[] = "'chargeMode' can't be null";
        }
            if (!is_null($this->container['cidrInVpc']) && !preg_match("/^[0-9]{1,3}(\\.[0-9]{1,3}){3}\/[0-9]{1,2}$/", $this->container['cidrInVpc'])) {
                $invalidProperties[] = "invalid value for 'cidrInVpc', must be conform to the pattern /^[0-9]{1,3}(\\.[0-9]{1,3}){3}\/[0-9]{1,2}$/.";
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
    * Gets clusterName
    *  新建的集群名称，名称只能包含数字、英文字母和下划线，但不能是纯数字，且不能以下划线开头。长度限制：1~128个字符。 说明：集群名称不区分大小写，系统会自动转换为小写。
    *
    * @return string
    */
    public function getClusterName()
    {
        return $this->container['clusterName'];
    }

    /**
    * Sets clusterName
    *
    * @param string $clusterName 新建的集群名称，名称只能包含数字、英文字母和下划线，但不能是纯数字，且不能以下划线开头。长度限制：1~128个字符。 说明：集群名称不区分大小写，系统会自动转换为小写。
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets description
    *  集群的描述信息。
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
    * @param string|null $description 集群的描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets flavorId
    *  集群规格。
    *
    * @return string
    */
    public function getFlavorId()
    {
        return $this->container['flavorId'];
    }

    /**
    * Sets flavorId
    *
    * @param string $flavorId 集群规格。
    *
    * @return $this
    */
    public function setFlavorId($flavorId)
    {
        $this->container['flavorId'] = $flavorId;
        return $this;
    }

    /**
    * Gets chargeMode
    *  集群的收费模式。只能设置为“1”，表示按照CU时收费。
    *
    * @return int
    */
    public function getChargeMode()
    {
        return $this->container['chargeMode'];
    }

    /**
    * Sets chargeMode
    *
    * @param int $chargeMode 集群的收费模式。只能设置为“1”，表示按照CU时收费。
    *
    * @return $this
    */
    public function setChargeMode($chargeMode)
    {
        $this->container['chargeMode'] = $chargeMode;
        return $this;
    }

    /**
    * Gets cidrInVpc
    *  队列的虚拟私有云（VPC）的网段。建议使用网段：10.0.0.0/8~28，172.16.0.0/12~28，192.168.0.0/16~28。
    *
    * @return string|null
    */
    public function getCidrInVpc()
    {
        return $this->container['cidrInVpc'];
    }

    /**
    * Sets cidrInVpc
    *
    * @param string|null $cidrInVpc 队列的虚拟私有云（VPC）的网段。建议使用网段：10.0.0.0/8~28，172.16.0.0/12~28，192.168.0.0/16~28。
    *
    * @return $this
    */
    public function setCidrInVpc($cidrInVpc)
    {
        $this->container['cidrInVpc'] = $cidrInVpc;
        return $this;
    }

    /**
    * Gets workspaces
    *  集群需要绑定的工作空间ID。
    *
    * @return string[]|null
    */
    public function getWorkspaces()
    {
        return $this->container['workspaces'];
    }

    /**
    * Sets workspaces
    *
    * @param string[]|null $workspaces 集群需要绑定的工作空间ID。
    *
    * @return $this
    */
    public function setWorkspaces($workspaces)
    {
        $this->container['workspaces'] = $workspaces;
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

