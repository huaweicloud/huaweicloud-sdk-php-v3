<?php

namespace HuaweiCloud\SDK\Bms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListBareMetalServersRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListBareMetalServersRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * flavor  裸金属服务器规格ID
    * name  裸金属服务器名称
    * status  裸金属服务器状态,只有管理员可以使用DELETED状态过滤查询已经删除的裸金属服务器。取值范围：ACTIVE、BUILD、ERROR、HARD_REBOOT、REBOOT、REBUILD、SHUTOFF
    * limit  每页返回裸金属服务器的条数，默认值是25，最大值为1000。limit为每页返回裸金属服务器详情的条数
    * offset  此接口为分页查询接口，offset为查询页码（起始页码为1），返回值包括总条数和裸金属服务器详情列表。传入offset：按limit值分页（limit默认为1000），返回第offset页裸金属服务器详情列表和总条数，总条数最大值为limit，不足按实际情况返回。不传入offset，传入limit：返回裸金属服务器详情列表和总条数，总条数最大值为limit，不足按实际情况返回。不传入offset，不传入limit：按25条分页，返回第1页裸金属服务器详情列表，总条数最大值为25，不足按实际情况返回。
    * tags  裸金属服务器标签：__type_baremetal
    * reservationId  批量创建裸金属服务器时，指定返回的ID，用于查询本次批量创建的裸金属服务器
    * detail  查询裸金属服务器结果的详细级别，级别越高，查询到的裸金属服务器信息越多，默认为4。可使用的级别为 1，2，3，4
    * enterpriseProjectId  查询绑定某个企业项目的裸金属服务器
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'flavor' => 'string',
            'name' => 'string',
            'status' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'tags' => 'string',
            'reservationId' => 'string',
            'detail' => 'string',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * flavor  裸金属服务器规格ID
    * name  裸金属服务器名称
    * status  裸金属服务器状态,只有管理员可以使用DELETED状态过滤查询已经删除的裸金属服务器。取值范围：ACTIVE、BUILD、ERROR、HARD_REBOOT、REBOOT、REBUILD、SHUTOFF
    * limit  每页返回裸金属服务器的条数，默认值是25，最大值为1000。limit为每页返回裸金属服务器详情的条数
    * offset  此接口为分页查询接口，offset为查询页码（起始页码为1），返回值包括总条数和裸金属服务器详情列表。传入offset：按limit值分页（limit默认为1000），返回第offset页裸金属服务器详情列表和总条数，总条数最大值为limit，不足按实际情况返回。不传入offset，传入limit：返回裸金属服务器详情列表和总条数，总条数最大值为limit，不足按实际情况返回。不传入offset，不传入limit：按25条分页，返回第1页裸金属服务器详情列表，总条数最大值为25，不足按实际情况返回。
    * tags  裸金属服务器标签：__type_baremetal
    * reservationId  批量创建裸金属服务器时，指定返回的ID，用于查询本次批量创建的裸金属服务器
    * detail  查询裸金属服务器结果的详细级别，级别越高，查询到的裸金属服务器信息越多，默认为4。可使用的级别为 1，2，3，4
    * enterpriseProjectId  查询绑定某个企业项目的裸金属服务器
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'flavor' => null,
        'name' => null,
        'status' => null,
        'limit' => null,
        'offset' => null,
        'tags' => null,
        'reservationId' => null,
        'detail' => null,
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
    * flavor  裸金属服务器规格ID
    * name  裸金属服务器名称
    * status  裸金属服务器状态,只有管理员可以使用DELETED状态过滤查询已经删除的裸金属服务器。取值范围：ACTIVE、BUILD、ERROR、HARD_REBOOT、REBOOT、REBUILD、SHUTOFF
    * limit  每页返回裸金属服务器的条数，默认值是25，最大值为1000。limit为每页返回裸金属服务器详情的条数
    * offset  此接口为分页查询接口，offset为查询页码（起始页码为1），返回值包括总条数和裸金属服务器详情列表。传入offset：按limit值分页（limit默认为1000），返回第offset页裸金属服务器详情列表和总条数，总条数最大值为limit，不足按实际情况返回。不传入offset，传入limit：返回裸金属服务器详情列表和总条数，总条数最大值为limit，不足按实际情况返回。不传入offset，不传入limit：按25条分页，返回第1页裸金属服务器详情列表，总条数最大值为25，不足按实际情况返回。
    * tags  裸金属服务器标签：__type_baremetal
    * reservationId  批量创建裸金属服务器时，指定返回的ID，用于查询本次批量创建的裸金属服务器
    * detail  查询裸金属服务器结果的详细级别，级别越高，查询到的裸金属服务器信息越多，默认为4。可使用的级别为 1，2，3，4
    * enterpriseProjectId  查询绑定某个企业项目的裸金属服务器
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'flavor' => 'flavor',
            'name' => 'name',
            'status' => 'status',
            'limit' => 'limit',
            'offset' => 'offset',
            'tags' => 'tags',
            'reservationId' => 'reservation_id',
            'detail' => 'detail',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * flavor  裸金属服务器规格ID
    * name  裸金属服务器名称
    * status  裸金属服务器状态,只有管理员可以使用DELETED状态过滤查询已经删除的裸金属服务器。取值范围：ACTIVE、BUILD、ERROR、HARD_REBOOT、REBOOT、REBUILD、SHUTOFF
    * limit  每页返回裸金属服务器的条数，默认值是25，最大值为1000。limit为每页返回裸金属服务器详情的条数
    * offset  此接口为分页查询接口，offset为查询页码（起始页码为1），返回值包括总条数和裸金属服务器详情列表。传入offset：按limit值分页（limit默认为1000），返回第offset页裸金属服务器详情列表和总条数，总条数最大值为limit，不足按实际情况返回。不传入offset，传入limit：返回裸金属服务器详情列表和总条数，总条数最大值为limit，不足按实际情况返回。不传入offset，不传入limit：按25条分页，返回第1页裸金属服务器详情列表，总条数最大值为25，不足按实际情况返回。
    * tags  裸金属服务器标签：__type_baremetal
    * reservationId  批量创建裸金属服务器时，指定返回的ID，用于查询本次批量创建的裸金属服务器
    * detail  查询裸金属服务器结果的详细级别，级别越高，查询到的裸金属服务器信息越多，默认为4。可使用的级别为 1，2，3，4
    * enterpriseProjectId  查询绑定某个企业项目的裸金属服务器
    *
    * @var string[]
    */
    protected static $setters = [
            'flavor' => 'setFlavor',
            'name' => 'setName',
            'status' => 'setStatus',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'tags' => 'setTags',
            'reservationId' => 'setReservationId',
            'detail' => 'setDetail',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * flavor  裸金属服务器规格ID
    * name  裸金属服务器名称
    * status  裸金属服务器状态,只有管理员可以使用DELETED状态过滤查询已经删除的裸金属服务器。取值范围：ACTIVE、BUILD、ERROR、HARD_REBOOT、REBOOT、REBUILD、SHUTOFF
    * limit  每页返回裸金属服务器的条数，默认值是25，最大值为1000。limit为每页返回裸金属服务器详情的条数
    * offset  此接口为分页查询接口，offset为查询页码（起始页码为1），返回值包括总条数和裸金属服务器详情列表。传入offset：按limit值分页（limit默认为1000），返回第offset页裸金属服务器详情列表和总条数，总条数最大值为limit，不足按实际情况返回。不传入offset，传入limit：返回裸金属服务器详情列表和总条数，总条数最大值为limit，不足按实际情况返回。不传入offset，不传入limit：按25条分页，返回第1页裸金属服务器详情列表，总条数最大值为25，不足按实际情况返回。
    * tags  裸金属服务器标签：__type_baremetal
    * reservationId  批量创建裸金属服务器时，指定返回的ID，用于查询本次批量创建的裸金属服务器
    * detail  查询裸金属服务器结果的详细级别，级别越高，查询到的裸金属服务器信息越多，默认为4。可使用的级别为 1，2，3，4
    * enterpriseProjectId  查询绑定某个企业项目的裸金属服务器
    *
    * @var string[]
    */
    protected static $getters = [
            'flavor' => 'getFlavor',
            'name' => 'getName',
            'status' => 'getStatus',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'tags' => 'getTags',
            'reservationId' => 'getReservationId',
            'detail' => 'getDetail',
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
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['reservationId'] = isset($data['reservationId']) ? $data['reservationId'] : null;
        $this->container['detail'] = isset($data['detail']) ? $data['detail'] : null;
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
    * Gets flavor
    *  裸金属服务器规格ID
    *
    * @return string|null
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param string|null $flavor 裸金属服务器规格ID
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets name
    *  裸金属服务器名称
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
    * @param string|null $name 裸金属服务器名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  裸金属服务器状态,只有管理员可以使用DELETED状态过滤查询已经删除的裸金属服务器。取值范围：ACTIVE、BUILD、ERROR、HARD_REBOOT、REBOOT、REBUILD、SHUTOFF
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 裸金属服务器状态,只有管理员可以使用DELETED状态过滤查询已经删除的裸金属服务器。取值范围：ACTIVE、BUILD、ERROR、HARD_REBOOT、REBOOT、REBUILD、SHUTOFF
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets limit
    *  每页返回裸金属服务器的条数，默认值是25，最大值为1000。limit为每页返回裸金属服务器详情的条数
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
    * @param int|null $limit 每页返回裸金属服务器的条数，默认值是25，最大值为1000。limit为每页返回裸金属服务器详情的条数
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
    *  此接口为分页查询接口，offset为查询页码（起始页码为1），返回值包括总条数和裸金属服务器详情列表。传入offset：按limit值分页（limit默认为1000），返回第offset页裸金属服务器详情列表和总条数，总条数最大值为limit，不足按实际情况返回。不传入offset，传入limit：返回裸金属服务器详情列表和总条数，总条数最大值为limit，不足按实际情况返回。不传入offset，不传入limit：按25条分页，返回第1页裸金属服务器详情列表，总条数最大值为25，不足按实际情况返回。
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
    * @param int|null $offset 此接口为分页查询接口，offset为查询页码（起始页码为1），返回值包括总条数和裸金属服务器详情列表。传入offset：按limit值分页（limit默认为1000），返回第offset页裸金属服务器详情列表和总条数，总条数最大值为limit，不足按实际情况返回。不传入offset，传入limit：返回裸金属服务器详情列表和总条数，总条数最大值为limit，不足按实际情况返回。不传入offset，不传入limit：按25条分页，返回第1页裸金属服务器详情列表，总条数最大值为25，不足按实际情况返回。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets tags
    *  裸金属服务器标签：__type_baremetal
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
    * @param string|null $tags 裸金属服务器标签：__type_baremetal
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets reservationId
    *  批量创建裸金属服务器时，指定返回的ID，用于查询本次批量创建的裸金属服务器
    *
    * @return string|null
    */
    public function getReservationId()
    {
        return $this->container['reservationId'];
    }

    /**
    * Sets reservationId
    *
    * @param string|null $reservationId 批量创建裸金属服务器时，指定返回的ID，用于查询本次批量创建的裸金属服务器
    *
    * @return $this
    */
    public function setReservationId($reservationId)
    {
        $this->container['reservationId'] = $reservationId;
        return $this;
    }

    /**
    * Gets detail
    *  查询裸金属服务器结果的详细级别，级别越高，查询到的裸金属服务器信息越多，默认为4。可使用的级别为 1，2，3，4
    *
    * @return string|null
    */
    public function getDetail()
    {
        return $this->container['detail'];
    }

    /**
    * Sets detail
    *
    * @param string|null $detail 查询裸金属服务器结果的详细级别，级别越高，查询到的裸金属服务器信息越多，默认为4。可使用的级别为 1，2，3，4
    *
    * @return $this
    */
    public function setDetail($detail)
    {
        $this->container['detail'] = $detail;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  查询绑定某个企业项目的裸金属服务器
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
    * @param string|null $enterpriseProjectId 查询绑定某个企业项目的裸金属服务器
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

