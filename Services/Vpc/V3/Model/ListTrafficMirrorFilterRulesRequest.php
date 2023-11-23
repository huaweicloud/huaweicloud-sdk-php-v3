<?php

namespace HuaweiCloud\SDK\Vpc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTrafficMirrorFilterRulesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTrafficMirrorFilterRulesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目ID
    * id  使用规则ID过滤或排序
    * description  使用规则描述过滤
    * trafficMirrorFilterId  使用筛选条件ID过滤
    * direction  使用规则方向过滤
    * protocol  使用规则协议过滤
    * sourceCidrBlock  使用规则源网段过滤
    * destinationCidrBlock  使用规则目的网段过滤
    * sourcePortRange  使用规则源端口范围过滤
    * destinationPortRange  使用规则目的端口范围过滤
    * action  使用规则action过滤
    * priority  使用规则优先级过滤
    * limit  功能说明：每页返回的个数 取值范围：0-2000
    * marker  分页查询起始的资源ID，为空时查询第一页
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'id' => 'string',
            'description' => 'string',
            'trafficMirrorFilterId' => 'string',
            'direction' => 'string',
            'protocol' => 'string',
            'sourceCidrBlock' => 'string',
            'destinationCidrBlock' => 'string',
            'sourcePortRange' => 'string',
            'destinationPortRange' => 'string',
            'action' => 'string',
            'priority' => 'string',
            'limit' => 'int',
            'marker' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目ID
    * id  使用规则ID过滤或排序
    * description  使用规则描述过滤
    * trafficMirrorFilterId  使用筛选条件ID过滤
    * direction  使用规则方向过滤
    * protocol  使用规则协议过滤
    * sourceCidrBlock  使用规则源网段过滤
    * destinationCidrBlock  使用规则目的网段过滤
    * sourcePortRange  使用规则源端口范围过滤
    * destinationPortRange  使用规则目的端口范围过滤
    * action  使用规则action过滤
    * priority  使用规则优先级过滤
    * limit  功能说明：每页返回的个数 取值范围：0-2000
    * marker  分页查询起始的资源ID，为空时查询第一页
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'id' => null,
        'description' => null,
        'trafficMirrorFilterId' => null,
        'direction' => null,
        'protocol' => null,
        'sourceCidrBlock' => null,
        'destinationCidrBlock' => null,
        'sourcePortRange' => null,
        'destinationPortRange' => null,
        'action' => null,
        'priority' => null,
        'limit' => 'int32',
        'marker' => null
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
    * projectId  项目ID
    * id  使用规则ID过滤或排序
    * description  使用规则描述过滤
    * trafficMirrorFilterId  使用筛选条件ID过滤
    * direction  使用规则方向过滤
    * protocol  使用规则协议过滤
    * sourceCidrBlock  使用规则源网段过滤
    * destinationCidrBlock  使用规则目的网段过滤
    * sourcePortRange  使用规则源端口范围过滤
    * destinationPortRange  使用规则目的端口范围过滤
    * action  使用规则action过滤
    * priority  使用规则优先级过滤
    * limit  功能说明：每页返回的个数 取值范围：0-2000
    * marker  分页查询起始的资源ID，为空时查询第一页
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'id' => 'id',
            'description' => 'description',
            'trafficMirrorFilterId' => 'traffic_mirror_filter_id',
            'direction' => 'direction',
            'protocol' => 'protocol',
            'sourceCidrBlock' => 'source_cidr_block',
            'destinationCidrBlock' => 'destination_cidr_block',
            'sourcePortRange' => 'source_port_range',
            'destinationPortRange' => 'destination_port_range',
            'action' => 'action',
            'priority' => 'priority',
            'limit' => 'limit',
            'marker' => 'marker'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目ID
    * id  使用规则ID过滤或排序
    * description  使用规则描述过滤
    * trafficMirrorFilterId  使用筛选条件ID过滤
    * direction  使用规则方向过滤
    * protocol  使用规则协议过滤
    * sourceCidrBlock  使用规则源网段过滤
    * destinationCidrBlock  使用规则目的网段过滤
    * sourcePortRange  使用规则源端口范围过滤
    * destinationPortRange  使用规则目的端口范围过滤
    * action  使用规则action过滤
    * priority  使用规则优先级过滤
    * limit  功能说明：每页返回的个数 取值范围：0-2000
    * marker  分页查询起始的资源ID，为空时查询第一页
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'id' => 'setId',
            'description' => 'setDescription',
            'trafficMirrorFilterId' => 'setTrafficMirrorFilterId',
            'direction' => 'setDirection',
            'protocol' => 'setProtocol',
            'sourceCidrBlock' => 'setSourceCidrBlock',
            'destinationCidrBlock' => 'setDestinationCidrBlock',
            'sourcePortRange' => 'setSourcePortRange',
            'destinationPortRange' => 'setDestinationPortRange',
            'action' => 'setAction',
            'priority' => 'setPriority',
            'limit' => 'setLimit',
            'marker' => 'setMarker'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目ID
    * id  使用规则ID过滤或排序
    * description  使用规则描述过滤
    * trafficMirrorFilterId  使用筛选条件ID过滤
    * direction  使用规则方向过滤
    * protocol  使用规则协议过滤
    * sourceCidrBlock  使用规则源网段过滤
    * destinationCidrBlock  使用规则目的网段过滤
    * sourcePortRange  使用规则源端口范围过滤
    * destinationPortRange  使用规则目的端口范围过滤
    * action  使用规则action过滤
    * priority  使用规则优先级过滤
    * limit  功能说明：每页返回的个数 取值范围：0-2000
    * marker  分页查询起始的资源ID，为空时查询第一页
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'id' => 'getId',
            'description' => 'getDescription',
            'trafficMirrorFilterId' => 'getTrafficMirrorFilterId',
            'direction' => 'getDirection',
            'protocol' => 'getProtocol',
            'sourceCidrBlock' => 'getSourceCidrBlock',
            'destinationCidrBlock' => 'getDestinationCidrBlock',
            'sourcePortRange' => 'getSourcePortRange',
            'destinationPortRange' => 'getDestinationPortRange',
            'action' => 'getAction',
            'priority' => 'getPriority',
            'limit' => 'getLimit',
            'marker' => 'getMarker'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['trafficMirrorFilterId'] = isset($data['trafficMirrorFilterId']) ? $data['trafficMirrorFilterId'] : null;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['sourceCidrBlock'] = isset($data['sourceCidrBlock']) ? $data['sourceCidrBlock'] : null;
        $this->container['destinationCidrBlock'] = isset($data['destinationCidrBlock']) ? $data['destinationCidrBlock'] : null;
        $this->container['sourcePortRange'] = isset($data['sourcePortRange']) ? $data['sourcePortRange'] : null;
        $this->container['destinationPortRange'] = isset($data['destinationPortRange']) ? $data['destinationPortRange'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
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
    * Gets projectId
    *  项目ID
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets id
    *  使用规则ID过滤或排序
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
    * @param string|null $id 使用规则ID过滤或排序
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets description
    *  使用规则描述过滤
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
    * @param string|null $description 使用规则描述过滤
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets trafficMirrorFilterId
    *  使用筛选条件ID过滤
    *
    * @return string|null
    */
    public function getTrafficMirrorFilterId()
    {
        return $this->container['trafficMirrorFilterId'];
    }

    /**
    * Sets trafficMirrorFilterId
    *
    * @param string|null $trafficMirrorFilterId 使用筛选条件ID过滤
    *
    * @return $this
    */
    public function setTrafficMirrorFilterId($trafficMirrorFilterId)
    {
        $this->container['trafficMirrorFilterId'] = $trafficMirrorFilterId;
        return $this;
    }

    /**
    * Gets direction
    *  使用规则方向过滤
    *
    * @return string|null
    */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
    * Sets direction
    *
    * @param string|null $direction 使用规则方向过滤
    *
    * @return $this
    */
    public function setDirection($direction)
    {
        $this->container['direction'] = $direction;
        return $this;
    }

    /**
    * Gets protocol
    *  使用规则协议过滤
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
    * @param string|null $protocol 使用规则协议过滤
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets sourceCidrBlock
    *  使用规则源网段过滤
    *
    * @return string|null
    */
    public function getSourceCidrBlock()
    {
        return $this->container['sourceCidrBlock'];
    }

    /**
    * Sets sourceCidrBlock
    *
    * @param string|null $sourceCidrBlock 使用规则源网段过滤
    *
    * @return $this
    */
    public function setSourceCidrBlock($sourceCidrBlock)
    {
        $this->container['sourceCidrBlock'] = $sourceCidrBlock;
        return $this;
    }

    /**
    * Gets destinationCidrBlock
    *  使用规则目的网段过滤
    *
    * @return string|null
    */
    public function getDestinationCidrBlock()
    {
        return $this->container['destinationCidrBlock'];
    }

    /**
    * Sets destinationCidrBlock
    *
    * @param string|null $destinationCidrBlock 使用规则目的网段过滤
    *
    * @return $this
    */
    public function setDestinationCidrBlock($destinationCidrBlock)
    {
        $this->container['destinationCidrBlock'] = $destinationCidrBlock;
        return $this;
    }

    /**
    * Gets sourcePortRange
    *  使用规则源端口范围过滤
    *
    * @return string|null
    */
    public function getSourcePortRange()
    {
        return $this->container['sourcePortRange'];
    }

    /**
    * Sets sourcePortRange
    *
    * @param string|null $sourcePortRange 使用规则源端口范围过滤
    *
    * @return $this
    */
    public function setSourcePortRange($sourcePortRange)
    {
        $this->container['sourcePortRange'] = $sourcePortRange;
        return $this;
    }

    /**
    * Gets destinationPortRange
    *  使用规则目的端口范围过滤
    *
    * @return string|null
    */
    public function getDestinationPortRange()
    {
        return $this->container['destinationPortRange'];
    }

    /**
    * Sets destinationPortRange
    *
    * @param string|null $destinationPortRange 使用规则目的端口范围过滤
    *
    * @return $this
    */
    public function setDestinationPortRange($destinationPortRange)
    {
        $this->container['destinationPortRange'] = $destinationPortRange;
        return $this;
    }

    /**
    * Gets action
    *  使用规则action过滤
    *
    * @return string|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string|null $action 使用规则action过滤
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets priority
    *  使用规则优先级过滤
    *
    * @return string|null
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param string|null $priority 使用规则优先级过滤
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets limit
    *  功能说明：每页返回的个数 取值范围：0-2000
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
    * @param int|null $limit 功能说明：每页返回的个数 取值范围：0-2000
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
    *  分页查询起始的资源ID，为空时查询第一页
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
    * @param string|null $marker 分页查询起始的资源ID，为空时查询第一页
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
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

