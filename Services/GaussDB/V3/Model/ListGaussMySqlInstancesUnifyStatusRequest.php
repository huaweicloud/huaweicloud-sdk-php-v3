<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListGaussMySqlInstancesUnifyStatusRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListGaussMySqlInstancesUnifyStatusRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xLanguage  请求语言类型。默认en-us。 取值范围： - en-us - zh-cn
    * id  实例ID。 “\\*”为系统保留字符，如果id是以“\\*”起始，表示按照“\\*”后面的值模糊匹配，否则，按照id精确匹配查询。不能只传入“\\*”。
    * name  实例名称。  “\\*”为系统保留字符，如果name是以“\\*”起始，表示按照“\\*”后面的值模糊匹配，否则，按照name精确匹配查询。不能只传入“\\*”。
    * type  按照实例类型查询。目前仅支持Cluster。
    * datastoreType  数据库类型，现在只支持gaussdb-mysql。
    * vpcId  虚拟私有云ID。
    * subnetId  子网的网络ID信息。
    * privateIp  读写内网IP地址。
    * readonlyPrivateIp  读内网IP地址。
    * proxyIp  读写分离IP地址。
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  查询记录数。默认为100，不能为负数，最小值为1，最大值为100。
    * tags  根据实例标签键值对进行查询。 - {key}表示标签键。 - {value}表示标签值。  如果同时使用多个标签键值对进行查询，中间使用逗号分隔开，表示查询同时包含指定标签键值对的实例。key不能重复，key之间是与的关系。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xLanguage' => 'string',
            'id' => 'string',
            'name' => 'string',
            'type' => 'string',
            'datastoreType' => 'string',
            'vpcId' => 'string',
            'subnetId' => 'string',
            'privateIp' => 'string',
            'readonlyPrivateIp' => 'string',
            'proxyIp' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'tags' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xLanguage  请求语言类型。默认en-us。 取值范围： - en-us - zh-cn
    * id  实例ID。 “\\*”为系统保留字符，如果id是以“\\*”起始，表示按照“\\*”后面的值模糊匹配，否则，按照id精确匹配查询。不能只传入“\\*”。
    * name  实例名称。  “\\*”为系统保留字符，如果name是以“\\*”起始，表示按照“\\*”后面的值模糊匹配，否则，按照name精确匹配查询。不能只传入“\\*”。
    * type  按照实例类型查询。目前仅支持Cluster。
    * datastoreType  数据库类型，现在只支持gaussdb-mysql。
    * vpcId  虚拟私有云ID。
    * subnetId  子网的网络ID信息。
    * privateIp  读写内网IP地址。
    * readonlyPrivateIp  读内网IP地址。
    * proxyIp  读写分离IP地址。
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  查询记录数。默认为100，不能为负数，最小值为1，最大值为100。
    * tags  根据实例标签键值对进行查询。 - {key}表示标签键。 - {value}表示标签值。  如果同时使用多个标签键值对进行查询，中间使用逗号分隔开，表示查询同时包含指定标签键值对的实例。key不能重复，key之间是与的关系。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xLanguage' => null,
        'id' => null,
        'name' => null,
        'type' => null,
        'datastoreType' => null,
        'vpcId' => null,
        'subnetId' => null,
        'privateIp' => null,
        'readonlyPrivateIp' => null,
        'proxyIp' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'tags' => null
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
    * xLanguage  请求语言类型。默认en-us。 取值范围： - en-us - zh-cn
    * id  实例ID。 “\\*”为系统保留字符，如果id是以“\\*”起始，表示按照“\\*”后面的值模糊匹配，否则，按照id精确匹配查询。不能只传入“\\*”。
    * name  实例名称。  “\\*”为系统保留字符，如果name是以“\\*”起始，表示按照“\\*”后面的值模糊匹配，否则，按照name精确匹配查询。不能只传入“\\*”。
    * type  按照实例类型查询。目前仅支持Cluster。
    * datastoreType  数据库类型，现在只支持gaussdb-mysql。
    * vpcId  虚拟私有云ID。
    * subnetId  子网的网络ID信息。
    * privateIp  读写内网IP地址。
    * readonlyPrivateIp  读内网IP地址。
    * proxyIp  读写分离IP地址。
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  查询记录数。默认为100，不能为负数，最小值为1，最大值为100。
    * tags  根据实例标签键值对进行查询。 - {key}表示标签键。 - {value}表示标签值。  如果同时使用多个标签键值对进行查询，中间使用逗号分隔开，表示查询同时包含指定标签键值对的实例。key不能重复，key之间是与的关系。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xLanguage' => 'X-Language',
            'id' => 'id',
            'name' => 'name',
            'type' => 'type',
            'datastoreType' => 'datastore_type',
            'vpcId' => 'vpc_id',
            'subnetId' => 'subnet_id',
            'privateIp' => 'private_ip',
            'readonlyPrivateIp' => 'readonly_private_ip',
            'proxyIp' => 'proxy_ip',
            'offset' => 'offset',
            'limit' => 'limit',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xLanguage  请求语言类型。默认en-us。 取值范围： - en-us - zh-cn
    * id  实例ID。 “\\*”为系统保留字符，如果id是以“\\*”起始，表示按照“\\*”后面的值模糊匹配，否则，按照id精确匹配查询。不能只传入“\\*”。
    * name  实例名称。  “\\*”为系统保留字符，如果name是以“\\*”起始，表示按照“\\*”后面的值模糊匹配，否则，按照name精确匹配查询。不能只传入“\\*”。
    * type  按照实例类型查询。目前仅支持Cluster。
    * datastoreType  数据库类型，现在只支持gaussdb-mysql。
    * vpcId  虚拟私有云ID。
    * subnetId  子网的网络ID信息。
    * privateIp  读写内网IP地址。
    * readonlyPrivateIp  读内网IP地址。
    * proxyIp  读写分离IP地址。
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  查询记录数。默认为100，不能为负数，最小值为1，最大值为100。
    * tags  根据实例标签键值对进行查询。 - {key}表示标签键。 - {value}表示标签值。  如果同时使用多个标签键值对进行查询，中间使用逗号分隔开，表示查询同时包含指定标签键值对的实例。key不能重复，key之间是与的关系。
    *
    * @var string[]
    */
    protected static $setters = [
            'xLanguage' => 'setXLanguage',
            'id' => 'setId',
            'name' => 'setName',
            'type' => 'setType',
            'datastoreType' => 'setDatastoreType',
            'vpcId' => 'setVpcId',
            'subnetId' => 'setSubnetId',
            'privateIp' => 'setPrivateIp',
            'readonlyPrivateIp' => 'setReadonlyPrivateIp',
            'proxyIp' => 'setProxyIp',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xLanguage  请求语言类型。默认en-us。 取值范围： - en-us - zh-cn
    * id  实例ID。 “\\*”为系统保留字符，如果id是以“\\*”起始，表示按照“\\*”后面的值模糊匹配，否则，按照id精确匹配查询。不能只传入“\\*”。
    * name  实例名称。  “\\*”为系统保留字符，如果name是以“\\*”起始，表示按照“\\*”后面的值模糊匹配，否则，按照name精确匹配查询。不能只传入“\\*”。
    * type  按照实例类型查询。目前仅支持Cluster。
    * datastoreType  数据库类型，现在只支持gaussdb-mysql。
    * vpcId  虚拟私有云ID。
    * subnetId  子网的网络ID信息。
    * privateIp  读写内网IP地址。
    * readonlyPrivateIp  读内网IP地址。
    * proxyIp  读写分离IP地址。
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * limit  查询记录数。默认为100，不能为负数，最小值为1，最大值为100。
    * tags  根据实例标签键值对进行查询。 - {key}表示标签键。 - {value}表示标签值。  如果同时使用多个标签键值对进行查询，中间使用逗号分隔开，表示查询同时包含指定标签键值对的实例。key不能重复，key之间是与的关系。
    *
    * @var string[]
    */
    protected static $getters = [
            'xLanguage' => 'getXLanguage',
            'id' => 'getId',
            'name' => 'getName',
            'type' => 'getType',
            'datastoreType' => 'getDatastoreType',
            'vpcId' => 'getVpcId',
            'subnetId' => 'getSubnetId',
            'privateIp' => 'getPrivateIp',
            'readonlyPrivateIp' => 'getReadonlyPrivateIp',
            'proxyIp' => 'getProxyIp',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'tags' => 'getTags'
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
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['datastoreType'] = isset($data['datastoreType']) ? $data['datastoreType'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['readonlyPrivateIp'] = isset($data['readonlyPrivateIp']) ? $data['readonlyPrivateIp'] : null;
        $this->container['proxyIp'] = isset($data['proxyIp']) ? $data['proxyIp'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
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
    * Gets xLanguage
    *  请求语言类型。默认en-us。 取值范围： - en-us - zh-cn
    *
    * @return string|null
    */
    public function getXLanguage()
    {
        return $this->container['xLanguage'];
    }

    /**
    * Sets xLanguage
    *
    * @param string|null $xLanguage 请求语言类型。默认en-us。 取值范围： - en-us - zh-cn
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
        return $this;
    }

    /**
    * Gets id
    *  实例ID。 “\\*”为系统保留字符，如果id是以“\\*”起始，表示按照“\\*”后面的值模糊匹配，否则，按照id精确匹配查询。不能只传入“\\*”。
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
    * @param string|null $id 实例ID。 “\\*”为系统保留字符，如果id是以“\\*”起始，表示按照“\\*”后面的值模糊匹配，否则，按照id精确匹配查询。不能只传入“\\*”。
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
    *  实例名称。  “\\*”为系统保留字符，如果name是以“\\*”起始，表示按照“\\*”后面的值模糊匹配，否则，按照name精确匹配查询。不能只传入“\\*”。
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
    * @param string|null $name 实例名称。  “\\*”为系统保留字符，如果name是以“\\*”起始，表示按照“\\*”后面的值模糊匹配，否则，按照name精确匹配查询。不能只传入“\\*”。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  按照实例类型查询。目前仅支持Cluster。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 按照实例类型查询。目前仅支持Cluster。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets datastoreType
    *  数据库类型，现在只支持gaussdb-mysql。
    *
    * @return string|null
    */
    public function getDatastoreType()
    {
        return $this->container['datastoreType'];
    }

    /**
    * Sets datastoreType
    *
    * @param string|null $datastoreType 数据库类型，现在只支持gaussdb-mysql。
    *
    * @return $this
    */
    public function setDatastoreType($datastoreType)
    {
        $this->container['datastoreType'] = $datastoreType;
        return $this;
    }

    /**
    * Gets vpcId
    *  虚拟私有云ID。
    *
    * @return string|null
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string|null $vpcId 虚拟私有云ID。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets subnetId
    *  子网的网络ID信息。
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
    * @param string|null $subnetId 子网的网络ID信息。
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets privateIp
    *  读写内网IP地址。
    *
    * @return string|null
    */
    public function getPrivateIp()
    {
        return $this->container['privateIp'];
    }

    /**
    * Sets privateIp
    *
    * @param string|null $privateIp 读写内网IP地址。
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets readonlyPrivateIp
    *  读内网IP地址。
    *
    * @return string|null
    */
    public function getReadonlyPrivateIp()
    {
        return $this->container['readonlyPrivateIp'];
    }

    /**
    * Sets readonlyPrivateIp
    *
    * @param string|null $readonlyPrivateIp 读内网IP地址。
    *
    * @return $this
    */
    public function setReadonlyPrivateIp($readonlyPrivateIp)
    {
        $this->container['readonlyPrivateIp'] = $readonlyPrivateIp;
        return $this;
    }

    /**
    * Gets proxyIp
    *  读写分离IP地址。
    *
    * @return string|null
    */
    public function getProxyIp()
    {
        return $this->container['proxyIp'];
    }

    /**
    * Sets proxyIp
    *
    * @param string|null $proxyIp 读写分离IP地址。
    *
    * @return $this
    */
    public function setProxyIp($proxyIp)
    {
        $this->container['proxyIp'] = $proxyIp;
        return $this;
    }

    /**
    * Gets offset
    *  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  查询记录数。默认为100，不能为负数，最小值为1，最大值为100。
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
    * @param int|null $limit 查询记录数。默认为100，不能为负数，最小值为1，最大值为100。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets tags
    *  根据实例标签键值对进行查询。 - {key}表示标签键。 - {value}表示标签值。  如果同时使用多个标签键值对进行查询，中间使用逗号分隔开，表示查询同时包含指定标签键值对的实例。key不能重复，key之间是与的关系。
    *
    * @return string|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string|null $tags 根据实例标签键值对进行查询。 - {key}表示标签键。 - {value}表示标签值。  如果同时使用多个标签键值对进行查询，中间使用逗号分隔开，表示查询同时包含指定标签键值对的实例。key不能重复，key之间是与的关系。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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

