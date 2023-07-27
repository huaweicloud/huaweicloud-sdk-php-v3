<?php

namespace HuaweiCloud\SDK\Elb\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPoolsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPoolsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  分页查询中每页的后端服务器组个数
    * marker  分页查询的起始的资源id，表示上一页最后一条查询记录的后端服务器组的id。不指定时表示查询第一页。
    * pageReverse  分页的顺序，true表示从后往前分页，false表示从前往后分页，默认为false。
    * id  后端云服务器组ID。
    * name  后端云服务器组名称。
    * description  后端云服务器组的描述信息。
    * healthmonitorId  后端云服务器组关联的健康检查的ID。
    * loadbalancerId  后端云服务器组关联的负载均衡器ID。
    * protocol  后端云服务器组的后端协议。支持TCP、UDP和HTTP。
    * lbAlgorithm  后端云服务器组的负载均衡算法。取值范围：ROUND_ROBIN：加权轮询算法。LEAST_CONNECTIONS：加权最少连接算法。SOURCE_IP：源IP算法。当该字段的取值为SOURCE_IP时，后端云服务器组绑定的后端云服务器的weight字段无效。
    * memberAddress  后端云服务器组关联的后端云服务器IP。
    * memberDeviceId  后端云服务器组关联的后端云服务器对应的弹性云服务器的ID。
    * enterpriseProjectId  企业项目ID。  传入all_granted_eps表示查询所有有权限的企业项目资源；\"0\"表示查询默认企业项目资源；或者指定的企业项目ID下的资源。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'marker' => 'string',
            'pageReverse' => 'bool',
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'healthmonitorId' => 'string',
            'loadbalancerId' => 'string',
            'protocol' => 'string',
            'lbAlgorithm' => 'string',
            'memberAddress' => 'string',
            'memberDeviceId' => 'string',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  分页查询中每页的后端服务器组个数
    * marker  分页查询的起始的资源id，表示上一页最后一条查询记录的后端服务器组的id。不指定时表示查询第一页。
    * pageReverse  分页的顺序，true表示从后往前分页，false表示从前往后分页，默认为false。
    * id  后端云服务器组ID。
    * name  后端云服务器组名称。
    * description  后端云服务器组的描述信息。
    * healthmonitorId  后端云服务器组关联的健康检查的ID。
    * loadbalancerId  后端云服务器组关联的负载均衡器ID。
    * protocol  后端云服务器组的后端协议。支持TCP、UDP和HTTP。
    * lbAlgorithm  后端云服务器组的负载均衡算法。取值范围：ROUND_ROBIN：加权轮询算法。LEAST_CONNECTIONS：加权最少连接算法。SOURCE_IP：源IP算法。当该字段的取值为SOURCE_IP时，后端云服务器组绑定的后端云服务器的weight字段无效。
    * memberAddress  后端云服务器组关联的后端云服务器IP。
    * memberDeviceId  后端云服务器组关联的后端云服务器对应的弹性云服务器的ID。
    * enterpriseProjectId  企业项目ID。  传入all_granted_eps表示查询所有有权限的企业项目资源；\"0\"表示查询默认企业项目资源；或者指定的企业项目ID下的资源。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int32',
        'marker' => null,
        'pageReverse' => null,
        'id' => null,
        'name' => null,
        'description' => null,
        'healthmonitorId' => null,
        'loadbalancerId' => null,
        'protocol' => null,
        'lbAlgorithm' => null,
        'memberAddress' => null,
        'memberDeviceId' => null,
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
    * limit  分页查询中每页的后端服务器组个数
    * marker  分页查询的起始的资源id，表示上一页最后一条查询记录的后端服务器组的id。不指定时表示查询第一页。
    * pageReverse  分页的顺序，true表示从后往前分页，false表示从前往后分页，默认为false。
    * id  后端云服务器组ID。
    * name  后端云服务器组名称。
    * description  后端云服务器组的描述信息。
    * healthmonitorId  后端云服务器组关联的健康检查的ID。
    * loadbalancerId  后端云服务器组关联的负载均衡器ID。
    * protocol  后端云服务器组的后端协议。支持TCP、UDP和HTTP。
    * lbAlgorithm  后端云服务器组的负载均衡算法。取值范围：ROUND_ROBIN：加权轮询算法。LEAST_CONNECTIONS：加权最少连接算法。SOURCE_IP：源IP算法。当该字段的取值为SOURCE_IP时，后端云服务器组绑定的后端云服务器的weight字段无效。
    * memberAddress  后端云服务器组关联的后端云服务器IP。
    * memberDeviceId  后端云服务器组关联的后端云服务器对应的弹性云服务器的ID。
    * enterpriseProjectId  企业项目ID。  传入all_granted_eps表示查询所有有权限的企业项目资源；\"0\"表示查询默认企业项目资源；或者指定的企业项目ID下的资源。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'marker' => 'marker',
            'pageReverse' => 'page_reverse',
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'healthmonitorId' => 'healthmonitor_id',
            'loadbalancerId' => 'loadbalancer_id',
            'protocol' => 'protocol',
            'lbAlgorithm' => 'lb_algorithm',
            'memberAddress' => 'member_address',
            'memberDeviceId' => 'member_device_id',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  分页查询中每页的后端服务器组个数
    * marker  分页查询的起始的资源id，表示上一页最后一条查询记录的后端服务器组的id。不指定时表示查询第一页。
    * pageReverse  分页的顺序，true表示从后往前分页，false表示从前往后分页，默认为false。
    * id  后端云服务器组ID。
    * name  后端云服务器组名称。
    * description  后端云服务器组的描述信息。
    * healthmonitorId  后端云服务器组关联的健康检查的ID。
    * loadbalancerId  后端云服务器组关联的负载均衡器ID。
    * protocol  后端云服务器组的后端协议。支持TCP、UDP和HTTP。
    * lbAlgorithm  后端云服务器组的负载均衡算法。取值范围：ROUND_ROBIN：加权轮询算法。LEAST_CONNECTIONS：加权最少连接算法。SOURCE_IP：源IP算法。当该字段的取值为SOURCE_IP时，后端云服务器组绑定的后端云服务器的weight字段无效。
    * memberAddress  后端云服务器组关联的后端云服务器IP。
    * memberDeviceId  后端云服务器组关联的后端云服务器对应的弹性云服务器的ID。
    * enterpriseProjectId  企业项目ID。  传入all_granted_eps表示查询所有有权限的企业项目资源；\"0\"表示查询默认企业项目资源；或者指定的企业项目ID下的资源。
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'pageReverse' => 'setPageReverse',
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'healthmonitorId' => 'setHealthmonitorId',
            'loadbalancerId' => 'setLoadbalancerId',
            'protocol' => 'setProtocol',
            'lbAlgorithm' => 'setLbAlgorithm',
            'memberAddress' => 'setMemberAddress',
            'memberDeviceId' => 'setMemberDeviceId',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  分页查询中每页的后端服务器组个数
    * marker  分页查询的起始的资源id，表示上一页最后一条查询记录的后端服务器组的id。不指定时表示查询第一页。
    * pageReverse  分页的顺序，true表示从后往前分页，false表示从前往后分页，默认为false。
    * id  后端云服务器组ID。
    * name  后端云服务器组名称。
    * description  后端云服务器组的描述信息。
    * healthmonitorId  后端云服务器组关联的健康检查的ID。
    * loadbalancerId  后端云服务器组关联的负载均衡器ID。
    * protocol  后端云服务器组的后端协议。支持TCP、UDP和HTTP。
    * lbAlgorithm  后端云服务器组的负载均衡算法。取值范围：ROUND_ROBIN：加权轮询算法。LEAST_CONNECTIONS：加权最少连接算法。SOURCE_IP：源IP算法。当该字段的取值为SOURCE_IP时，后端云服务器组绑定的后端云服务器的weight字段无效。
    * memberAddress  后端云服务器组关联的后端云服务器IP。
    * memberDeviceId  后端云服务器组关联的后端云服务器对应的弹性云服务器的ID。
    * enterpriseProjectId  企业项目ID。  传入all_granted_eps表示查询所有有权限的企业项目资源；\"0\"表示查询默认企业项目资源；或者指定的企业项目ID下的资源。
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'pageReverse' => 'getPageReverse',
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'healthmonitorId' => 'getHealthmonitorId',
            'loadbalancerId' => 'getLoadbalancerId',
            'protocol' => 'getProtocol',
            'lbAlgorithm' => 'getLbAlgorithm',
            'memberAddress' => 'getMemberAddress',
            'memberDeviceId' => 'getMemberDeviceId',
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
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['pageReverse'] = isset($data['pageReverse']) ? $data['pageReverse'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['healthmonitorId'] = isset($data['healthmonitorId']) ? $data['healthmonitorId'] : null;
        $this->container['loadbalancerId'] = isset($data['loadbalancerId']) ? $data['loadbalancerId'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['lbAlgorithm'] = isset($data['lbAlgorithm']) ? $data['lbAlgorithm'] : null;
        $this->container['memberAddress'] = isset($data['memberAddress']) ? $data['memberAddress'] : null;
        $this->container['memberDeviceId'] = isset($data['memberDeviceId']) ? $data['memberDeviceId'] : null;
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
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
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
    * Gets limit
    *  分页查询中每页的后端服务器组个数
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
    * @param int|null $limit 分页查询中每页的后端服务器组个数
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
    *  分页查询的起始的资源id，表示上一页最后一条查询记录的后端服务器组的id。不指定时表示查询第一页。
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
    * @param string|null $marker 分页查询的起始的资源id，表示上一页最后一条查询记录的后端服务器组的id。不指定时表示查询第一页。
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
    *  后端云服务器组ID。
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
    * @param string|null $id 后端云服务器组ID。
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
    *  后端云服务器组名称。
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
    * @param string|null $name 后端云服务器组名称。
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
    *  后端云服务器组的描述信息。
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
    * @param string|null $description 后端云服务器组的描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets healthmonitorId
    *  后端云服务器组关联的健康检查的ID。
    *
    * @return string|null
    */
    public function getHealthmonitorId()
    {
        return $this->container['healthmonitorId'];
    }

    /**
    * Sets healthmonitorId
    *
    * @param string|null $healthmonitorId 后端云服务器组关联的健康检查的ID。
    *
    * @return $this
    */
    public function setHealthmonitorId($healthmonitorId)
    {
        $this->container['healthmonitorId'] = $healthmonitorId;
        return $this;
    }

    /**
    * Gets loadbalancerId
    *  后端云服务器组关联的负载均衡器ID。
    *
    * @return string|null
    */
    public function getLoadbalancerId()
    {
        return $this->container['loadbalancerId'];
    }

    /**
    * Sets loadbalancerId
    *
    * @param string|null $loadbalancerId 后端云服务器组关联的负载均衡器ID。
    *
    * @return $this
    */
    public function setLoadbalancerId($loadbalancerId)
    {
        $this->container['loadbalancerId'] = $loadbalancerId;
        return $this;
    }

    /**
    * Gets protocol
    *  后端云服务器组的后端协议。支持TCP、UDP和HTTP。
    *
    * @return string|null
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string|null $protocol 后端云服务器组的后端协议。支持TCP、UDP和HTTP。
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets lbAlgorithm
    *  后端云服务器组的负载均衡算法。取值范围：ROUND_ROBIN：加权轮询算法。LEAST_CONNECTIONS：加权最少连接算法。SOURCE_IP：源IP算法。当该字段的取值为SOURCE_IP时，后端云服务器组绑定的后端云服务器的weight字段无效。
    *
    * @return string|null
    */
    public function getLbAlgorithm()
    {
        return $this->container['lbAlgorithm'];
    }

    /**
    * Sets lbAlgorithm
    *
    * @param string|null $lbAlgorithm 后端云服务器组的负载均衡算法。取值范围：ROUND_ROBIN：加权轮询算法。LEAST_CONNECTIONS：加权最少连接算法。SOURCE_IP：源IP算法。当该字段的取值为SOURCE_IP时，后端云服务器组绑定的后端云服务器的weight字段无效。
    *
    * @return $this
    */
    public function setLbAlgorithm($lbAlgorithm)
    {
        $this->container['lbAlgorithm'] = $lbAlgorithm;
        return $this;
    }

    /**
    * Gets memberAddress
    *  后端云服务器组关联的后端云服务器IP。
    *
    * @return string|null
    */
    public function getMemberAddress()
    {
        return $this->container['memberAddress'];
    }

    /**
    * Sets memberAddress
    *
    * @param string|null $memberAddress 后端云服务器组关联的后端云服务器IP。
    *
    * @return $this
    */
    public function setMemberAddress($memberAddress)
    {
        $this->container['memberAddress'] = $memberAddress;
        return $this;
    }

    /**
    * Gets memberDeviceId
    *  后端云服务器组关联的后端云服务器对应的弹性云服务器的ID。
    *
    * @return string|null
    */
    public function getMemberDeviceId()
    {
        return $this->container['memberDeviceId'];
    }

    /**
    * Sets memberDeviceId
    *
    * @param string|null $memberDeviceId 后端云服务器组关联的后端云服务器对应的弹性云服务器的ID。
    *
    * @return $this
    */
    public function setMemberDeviceId($memberDeviceId)
    {
        $this->container['memberDeviceId'] = $memberDeviceId;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。  传入all_granted_eps表示查询所有有权限的企业项目资源；\"0\"表示查询默认企业项目资源；或者指定的企业项目ID下的资源。
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
    * @param string|null $enterpriseProjectId 企业项目ID。  传入all_granted_eps表示查询所有有权限的企业项目资源；\"0\"表示查询默认企业项目资源；或者指定的企业项目ID下的资源。
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

