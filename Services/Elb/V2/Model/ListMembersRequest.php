<?php

namespace HuaweiCloud\SDK\Elb\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListMembersRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListMembersRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * poolId  后端云服务器组id
    * limit  分页查询中每页的后端服务器个数
    * marker  分页查询的起始的资源id，表示上一页最后一条查询记录的后端服务器的id。不指定时表示查询第一页。
    * pageReverse  分页的顺序，true表示从后往前分页，false表示从前往后分页，默认为false。
    * id  后端云服务器的ID。
    * name  后端云服务器的名称。
    * address  后端云服务器对应的IP地址。
    * protocolPort  后端云服务器后端端口的协议号。
    * subnetId  后端云服务器所在的子网ID。
    * adminStateUp  后端云服务器的管理状态。取值范围：true/false。
    * weight  后端云服务器的权重。
    * enterpriseProjectId  企业项目ID。 不传时查询default企业项目（即enterprise_project_id=0）下的资源，鉴权按照default企业项目鉴权。 如果传值enterprise_project_id=all_granted_eps，则表示查询所有有权限的企业项目下的资源。 其他情况则传已存在的企业项目ID。此时会校验ID，若不存在或格式错误则报错。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'poolId' => 'string',
            'limit' => 'int',
            'marker' => 'string',
            'pageReverse' => 'bool',
            'id' => 'string',
            'name' => 'string',
            'address' => 'string',
            'protocolPort' => 'int',
            'subnetId' => 'string',
            'adminStateUp' => 'bool',
            'weight' => 'int',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * poolId  后端云服务器组id
    * limit  分页查询中每页的后端服务器个数
    * marker  分页查询的起始的资源id，表示上一页最后一条查询记录的后端服务器的id。不指定时表示查询第一页。
    * pageReverse  分页的顺序，true表示从后往前分页，false表示从前往后分页，默认为false。
    * id  后端云服务器的ID。
    * name  后端云服务器的名称。
    * address  后端云服务器对应的IP地址。
    * protocolPort  后端云服务器后端端口的协议号。
    * subnetId  后端云服务器所在的子网ID。
    * adminStateUp  后端云服务器的管理状态。取值范围：true/false。
    * weight  后端云服务器的权重。
    * enterpriseProjectId  企业项目ID。 不传时查询default企业项目（即enterprise_project_id=0）下的资源，鉴权按照default企业项目鉴权。 如果传值enterprise_project_id=all_granted_eps，则表示查询所有有权限的企业项目下的资源。 其他情况则传已存在的企业项目ID。此时会校验ID，若不存在或格式错误则报错。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'poolId' => null,
        'limit' => 'int32',
        'marker' => null,
        'pageReverse' => null,
        'id' => null,
        'name' => null,
        'address' => null,
        'protocolPort' => 'int32',
        'subnetId' => null,
        'adminStateUp' => null,
        'weight' => 'int32',
        'enterpriseProjectId' => null
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
    * poolId  后端云服务器组id
    * limit  分页查询中每页的后端服务器个数
    * marker  分页查询的起始的资源id，表示上一页最后一条查询记录的后端服务器的id。不指定时表示查询第一页。
    * pageReverse  分页的顺序，true表示从后往前分页，false表示从前往后分页，默认为false。
    * id  后端云服务器的ID。
    * name  后端云服务器的名称。
    * address  后端云服务器对应的IP地址。
    * protocolPort  后端云服务器后端端口的协议号。
    * subnetId  后端云服务器所在的子网ID。
    * adminStateUp  后端云服务器的管理状态。取值范围：true/false。
    * weight  后端云服务器的权重。
    * enterpriseProjectId  企业项目ID。 不传时查询default企业项目（即enterprise_project_id=0）下的资源，鉴权按照default企业项目鉴权。 如果传值enterprise_project_id=all_granted_eps，则表示查询所有有权限的企业项目下的资源。 其他情况则传已存在的企业项目ID。此时会校验ID，若不存在或格式错误则报错。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'poolId' => 'pool_id',
            'limit' => 'limit',
            'marker' => 'marker',
            'pageReverse' => 'page_reverse',
            'id' => 'id',
            'name' => 'name',
            'address' => 'address',
            'protocolPort' => 'protocol_port',
            'subnetId' => 'subnet_id',
            'adminStateUp' => 'admin_state_up',
            'weight' => 'weight',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * poolId  后端云服务器组id
    * limit  分页查询中每页的后端服务器个数
    * marker  分页查询的起始的资源id，表示上一页最后一条查询记录的后端服务器的id。不指定时表示查询第一页。
    * pageReverse  分页的顺序，true表示从后往前分页，false表示从前往后分页，默认为false。
    * id  后端云服务器的ID。
    * name  后端云服务器的名称。
    * address  后端云服务器对应的IP地址。
    * protocolPort  后端云服务器后端端口的协议号。
    * subnetId  后端云服务器所在的子网ID。
    * adminStateUp  后端云服务器的管理状态。取值范围：true/false。
    * weight  后端云服务器的权重。
    * enterpriseProjectId  企业项目ID。 不传时查询default企业项目（即enterprise_project_id=0）下的资源，鉴权按照default企业项目鉴权。 如果传值enterprise_project_id=all_granted_eps，则表示查询所有有权限的企业项目下的资源。 其他情况则传已存在的企业项目ID。此时会校验ID，若不存在或格式错误则报错。
    *
    * @var string[]
    */
    protected static $setters = [
            'poolId' => 'setPoolId',
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'pageReverse' => 'setPageReverse',
            'id' => 'setId',
            'name' => 'setName',
            'address' => 'setAddress',
            'protocolPort' => 'setProtocolPort',
            'subnetId' => 'setSubnetId',
            'adminStateUp' => 'setAdminStateUp',
            'weight' => 'setWeight',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * poolId  后端云服务器组id
    * limit  分页查询中每页的后端服务器个数
    * marker  分页查询的起始的资源id，表示上一页最后一条查询记录的后端服务器的id。不指定时表示查询第一页。
    * pageReverse  分页的顺序，true表示从后往前分页，false表示从前往后分页，默认为false。
    * id  后端云服务器的ID。
    * name  后端云服务器的名称。
    * address  后端云服务器对应的IP地址。
    * protocolPort  后端云服务器后端端口的协议号。
    * subnetId  后端云服务器所在的子网ID。
    * adminStateUp  后端云服务器的管理状态。取值范围：true/false。
    * weight  后端云服务器的权重。
    * enterpriseProjectId  企业项目ID。 不传时查询default企业项目（即enterprise_project_id=0）下的资源，鉴权按照default企业项目鉴权。 如果传值enterprise_project_id=all_granted_eps，则表示查询所有有权限的企业项目下的资源。 其他情况则传已存在的企业项目ID。此时会校验ID，若不存在或格式错误则报错。
    *
    * @var string[]
    */
    protected static $getters = [
            'poolId' => 'getPoolId',
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'pageReverse' => 'getPageReverse',
            'id' => 'getId',
            'name' => 'getName',
            'address' => 'getAddress',
            'protocolPort' => 'getProtocolPort',
            'subnetId' => 'getSubnetId',
            'adminStateUp' => 'getAdminStateUp',
            'weight' => 'getWeight',
            'enterpriseProjectId' => 'getEnterpriseProjectId'
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
        $this->container['poolId'] = isset($data['poolId']) ? $data['poolId'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['pageReverse'] = isset($data['pageReverse']) ? $data['pageReverse'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['protocolPort'] = isset($data['protocolPort']) ? $data['protocolPort'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['poolId'] === null) {
            $invalidProperties[] = "'poolId' can't be null";
        }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['address']) && (mb_strlen($this->container['address']) > 64)) {
                $invalidProperties[] = "invalid value for 'address', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['address']) && (mb_strlen($this->container['address']) < 0)) {
                $invalidProperties[] = "invalid value for 'address', the character length must be bigger than or equal to 0.";
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
    * Gets poolId
    *  后端云服务器组id
    *
    * @return string
    */
    public function getPoolId()
    {
        return $this->container['poolId'];
    }

    /**
    * Sets poolId
    *
    * @param string $poolId 后端云服务器组id
    *
    * @return $this
    */
    public function setPoolId($poolId)
    {
        $this->container['poolId'] = $poolId;
        return $this;
    }

    /**
    * Gets limit
    *  分页查询中每页的后端服务器个数
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 分页查询中每页的后端服务器个数
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets marker
    *  分页查询的起始的资源id，表示上一页最后一条查询记录的后端服务器的id。不指定时表示查询第一页。
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker 分页查询的起始的资源id，表示上一页最后一条查询记录的后端服务器的id。不指定时表示查询第一页。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets pageReverse
    *  分页的顺序，true表示从后往前分页，false表示从前往后分页，默认为false。
    *
    * @return bool|null
    */
    public function getPageReverse()
    {
        return $this->container['pageReverse'];
    }

    /**
    * Sets pageReverse
    *
    * @param bool|null $pageReverse 分页的顺序，true表示从后往前分页，false表示从前往后分页，默认为false。
    *
    * @return $this
    */
    public function setPageReverse($pageReverse)
    {
        $this->container['pageReverse'] = $pageReverse;
        return $this;
    }

    /**
    * Gets id
    *  后端云服务器的ID。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 后端云服务器的ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  后端云服务器的名称。
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
    * @param string|null $name 后端云服务器的名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets address
    *  后端云服务器对应的IP地址。
    *
    * @return string|null
    */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
    * Sets address
    *
    * @param string|null $address 后端云服务器对应的IP地址。
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets protocolPort
    *  后端云服务器后端端口的协议号。
    *
    * @return int|null
    */
    public function getProtocolPort()
    {
        return $this->container['protocolPort'];
    }

    /**
    * Sets protocolPort
    *
    * @param int|null $protocolPort 后端云服务器后端端口的协议号。
    *
    * @return $this
    */
    public function setProtocolPort($protocolPort)
    {
        $this->container['protocolPort'] = $protocolPort;
        return $this;
    }

    /**
    * Gets subnetId
    *  后端云服务器所在的子网ID。
    *
    * @return string|null
    */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
    * Sets subnetId
    *
    * @param string|null $subnetId 后端云服务器所在的子网ID。
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  后端云服务器的管理状态。取值范围：true/false。
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
    * @param bool|null $adminStateUp 后端云服务器的管理状态。取值范围：true/false。
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets weight
    *  后端云服务器的权重。
    *
    * @return int|null
    */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
    * Sets weight
    *
    * @param int|null $weight 后端云服务器的权重。
    *
    * @return $this
    */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。 不传时查询default企业项目（即enterprise_project_id=0）下的资源，鉴权按照default企业项目鉴权。 如果传值enterprise_project_id=all_granted_eps，则表示查询所有有权限的企业项目下的资源。 其他情况则传已存在的企业项目ID。此时会校验ID，若不存在或格式错误则报错。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目ID。 不传时查询default企业项目（即enterprise_project_id=0）下的资源，鉴权按照default企业项目鉴权。 如果传值enterprise_project_id=all_granted_eps，则表示查询所有有权限的企业项目下的资源。 其他情况则传已存在的企业项目ID。此时会校验ID，若不存在或格式错误则报错。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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

