<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowClusterListRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowClusterListRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * category  获取特定category的集群。
    * enablestatus  是否获取集群的资源信息。不填或者填写为true为获取集群资源汇总信息，置为false为不获取集群状态信息；缺省值为true
    * clustergroupid  容器舰队ID。不填会返回用户所有集群，填了之后会返回属于该容器舰队的集群。
    * limit  分页获取列表时，页的大小，默认为-1
    * offset  分页获取列表时，起始偏移量，默认为0
    * orderBy  分页获取列表时，排序参数，支持 create_at 和 update_at
    * order  分页获取列表时，排序方向，支持 desc 和 asc
    * managetype  获取集群列表时，根据集群类型筛选，不传参时默认为 all ，支持 all ，grouped，discrete 三种类型。 - grouped：在舰队中纳管的集群 - discrete：未加入舰队的集群 - all：所有集群
    * clusterids  集群ID。多个ID以英文逗号分隔。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'category' => 'string',
            'enablestatus' => 'bool',
            'clustergroupid' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'orderBy' => 'string',
            'order' => 'string',
            'managetype' => 'string',
            'clusterids' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * category  获取特定category的集群。
    * enablestatus  是否获取集群的资源信息。不填或者填写为true为获取集群资源汇总信息，置为false为不获取集群状态信息；缺省值为true
    * clustergroupid  容器舰队ID。不填会返回用户所有集群，填了之后会返回属于该容器舰队的集群。
    * limit  分页获取列表时，页的大小，默认为-1
    * offset  分页获取列表时，起始偏移量，默认为0
    * orderBy  分页获取列表时，排序参数，支持 create_at 和 update_at
    * order  分页获取列表时，排序方向，支持 desc 和 asc
    * managetype  获取集群列表时，根据集群类型筛选，不传参时默认为 all ，支持 all ，grouped，discrete 三种类型。 - grouped：在舰队中纳管的集群 - discrete：未加入舰队的集群 - all：所有集群
    * clusterids  集群ID。多个ID以英文逗号分隔。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'category' => null,
        'enablestatus' => null,
        'clustergroupid' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'orderBy' => null,
        'order' => null,
        'managetype' => null,
        'clusterids' => null
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
    * category  获取特定category的集群。
    * enablestatus  是否获取集群的资源信息。不填或者填写为true为获取集群资源汇总信息，置为false为不获取集群状态信息；缺省值为true
    * clustergroupid  容器舰队ID。不填会返回用户所有集群，填了之后会返回属于该容器舰队的集群。
    * limit  分页获取列表时，页的大小，默认为-1
    * offset  分页获取列表时，起始偏移量，默认为0
    * orderBy  分页获取列表时，排序参数，支持 create_at 和 update_at
    * order  分页获取列表时，排序方向，支持 desc 和 asc
    * managetype  获取集群列表时，根据集群类型筛选，不传参时默认为 all ，支持 all ，grouped，discrete 三种类型。 - grouped：在舰队中纳管的集群 - discrete：未加入舰队的集群 - all：所有集群
    * clusterids  集群ID。多个ID以英文逗号分隔。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'category' => 'category',
            'enablestatus' => 'enablestatus',
            'clustergroupid' => 'clustergroupid',
            'limit' => 'limit',
            'offset' => 'offset',
            'orderBy' => 'order_by',
            'order' => 'order',
            'managetype' => 'managetype',
            'clusterids' => 'clusterids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * category  获取特定category的集群。
    * enablestatus  是否获取集群的资源信息。不填或者填写为true为获取集群资源汇总信息，置为false为不获取集群状态信息；缺省值为true
    * clustergroupid  容器舰队ID。不填会返回用户所有集群，填了之后会返回属于该容器舰队的集群。
    * limit  分页获取列表时，页的大小，默认为-1
    * offset  分页获取列表时，起始偏移量，默认为0
    * orderBy  分页获取列表时，排序参数，支持 create_at 和 update_at
    * order  分页获取列表时，排序方向，支持 desc 和 asc
    * managetype  获取集群列表时，根据集群类型筛选，不传参时默认为 all ，支持 all ，grouped，discrete 三种类型。 - grouped：在舰队中纳管的集群 - discrete：未加入舰队的集群 - all：所有集群
    * clusterids  集群ID。多个ID以英文逗号分隔。
    *
    * @var string[]
    */
    protected static $setters = [
            'category' => 'setCategory',
            'enablestatus' => 'setEnablestatus',
            'clustergroupid' => 'setClustergroupid',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'orderBy' => 'setOrderBy',
            'order' => 'setOrder',
            'managetype' => 'setManagetype',
            'clusterids' => 'setClusterids'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * category  获取特定category的集群。
    * enablestatus  是否获取集群的资源信息。不填或者填写为true为获取集群资源汇总信息，置为false为不获取集群状态信息；缺省值为true
    * clustergroupid  容器舰队ID。不填会返回用户所有集群，填了之后会返回属于该容器舰队的集群。
    * limit  分页获取列表时，页的大小，默认为-1
    * offset  分页获取列表时，起始偏移量，默认为0
    * orderBy  分页获取列表时，排序参数，支持 create_at 和 update_at
    * order  分页获取列表时，排序方向，支持 desc 和 asc
    * managetype  获取集群列表时，根据集群类型筛选，不传参时默认为 all ，支持 all ，grouped，discrete 三种类型。 - grouped：在舰队中纳管的集群 - discrete：未加入舰队的集群 - all：所有集群
    * clusterids  集群ID。多个ID以英文逗号分隔。
    *
    * @var string[]
    */
    protected static $getters = [
            'category' => 'getCategory',
            'enablestatus' => 'getEnablestatus',
            'clustergroupid' => 'getClustergroupid',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'orderBy' => 'getOrderBy',
            'order' => 'getOrder',
            'managetype' => 'getManagetype',
            'clusterids' => 'getClusterids'
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
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['enablestatus'] = isset($data['enablestatus']) ? $data['enablestatus'] : null;
        $this->container['clustergroupid'] = isset($data['clustergroupid']) ? $data['clustergroupid'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['orderBy'] = isset($data['orderBy']) ? $data['orderBy'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['managetype'] = isset($data['managetype']) ? $data['managetype'] : null;
        $this->container['clusterids'] = isset($data['clusterids']) ? $data['clusterids'] : null;
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
    * Gets category
    *  获取特定category的集群。
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category 获取特定category的集群。
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets enablestatus
    *  是否获取集群的资源信息。不填或者填写为true为获取集群资源汇总信息，置为false为不获取集群状态信息；缺省值为true
    *
    * @return bool|null
    */
    public function getEnablestatus()
    {
        return $this->container['enablestatus'];
    }

    /**
    * Sets enablestatus
    *
    * @param bool|null $enablestatus 是否获取集群的资源信息。不填或者填写为true为获取集群资源汇总信息，置为false为不获取集群状态信息；缺省值为true
    *
    * @return $this
    */
    public function setEnablestatus($enablestatus)
    {
        $this->container['enablestatus'] = $enablestatus;
        return $this;
    }

    /**
    * Gets clustergroupid
    *  容器舰队ID。不填会返回用户所有集群，填了之后会返回属于该容器舰队的集群。
    *
    * @return string|null
    */
    public function getClustergroupid()
    {
        return $this->container['clustergroupid'];
    }

    /**
    * Sets clustergroupid
    *
    * @param string|null $clustergroupid 容器舰队ID。不填会返回用户所有集群，填了之后会返回属于该容器舰队的集群。
    *
    * @return $this
    */
    public function setClustergroupid($clustergroupid)
    {
        $this->container['clustergroupid'] = $clustergroupid;
        return $this;
    }

    /**
    * Gets limit
    *  分页获取列表时，页的大小，默认为-1
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
    * @param int|null $limit 分页获取列表时，页的大小，默认为-1
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  分页获取列表时，起始偏移量，默认为0
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
    * @param int|null $offset 分页获取列表时，起始偏移量，默认为0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets orderBy
    *  分页获取列表时，排序参数，支持 create_at 和 update_at
    *
    * @return string|null
    */
    public function getOrderBy()
    {
        return $this->container['orderBy'];
    }

    /**
    * Sets orderBy
    *
    * @param string|null $orderBy 分页获取列表时，排序参数，支持 create_at 和 update_at
    *
    * @return $this
    */
    public function setOrderBy($orderBy)
    {
        $this->container['orderBy'] = $orderBy;
        return $this;
    }

    /**
    * Gets order
    *  分页获取列表时，排序方向，支持 desc 和 asc
    *
    * @return string|null
    */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
    * Sets order
    *
    * @param string|null $order 分页获取列表时，排序方向，支持 desc 和 asc
    *
    * @return $this
    */
    public function setOrder($order)
    {
        $this->container['order'] = $order;
        return $this;
    }

    /**
    * Gets managetype
    *  获取集群列表时，根据集群类型筛选，不传参时默认为 all ，支持 all ，grouped，discrete 三种类型。 - grouped：在舰队中纳管的集群 - discrete：未加入舰队的集群 - all：所有集群
    *
    * @return string|null
    */
    public function getManagetype()
    {
        return $this->container['managetype'];
    }

    /**
    * Sets managetype
    *
    * @param string|null $managetype 获取集群列表时，根据集群类型筛选，不传参时默认为 all ，支持 all ，grouped，discrete 三种类型。 - grouped：在舰队中纳管的集群 - discrete：未加入舰队的集群 - all：所有集群
    *
    * @return $this
    */
    public function setManagetype($managetype)
    {
        $this->container['managetype'] = $managetype;
        return $this;
    }

    /**
    * Gets clusterids
    *  集群ID。多个ID以英文逗号分隔。
    *
    * @return string|null
    */
    public function getClusterids()
    {
        return $this->container['clusterids'];
    }

    /**
    * Sets clusterids
    *
    * @param string|null $clusterids 集群ID。多个ID以英文逗号分隔。
    *
    * @return $this
    */
    public function setClusterids($clusterids)
    {
        $this->container['clusterids'] = $clusterids;
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

