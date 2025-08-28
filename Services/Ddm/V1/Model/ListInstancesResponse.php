<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListInstancesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListInstancesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instances  DDM实例的信息。
    * instanceNum  租户下的DDM实例个数
    * pageNo  当前页码
    * pageSize  当前页码的数据条数
    * totalRecord  总条数
    * totalPage  总页数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instances' => '\HuaweiCloud\SDK\Ddm\V1\Model\ShowInstanceBeanResponse[]',
            'instanceNum' => 'int',
            'pageNo' => 'int',
            'pageSize' => 'int',
            'totalRecord' => 'int',
            'totalPage' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instances  DDM实例的信息。
    * instanceNum  租户下的DDM实例个数
    * pageNo  当前页码
    * pageSize  当前页码的数据条数
    * totalRecord  总条数
    * totalPage  总页数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instances' => null,
        'instanceNum' => null,
        'pageNo' => null,
        'pageSize' => null,
        'totalRecord' => null,
        'totalPage' => null
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
    * instances  DDM实例的信息。
    * instanceNum  租户下的DDM实例个数
    * pageNo  当前页码
    * pageSize  当前页码的数据条数
    * totalRecord  总条数
    * totalPage  总页数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instances' => 'instances',
            'instanceNum' => 'instance_num',
            'pageNo' => 'page_no',
            'pageSize' => 'page_size',
            'totalRecord' => 'total_record',
            'totalPage' => 'total_page'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instances  DDM实例的信息。
    * instanceNum  租户下的DDM实例个数
    * pageNo  当前页码
    * pageSize  当前页码的数据条数
    * totalRecord  总条数
    * totalPage  总页数
    *
    * @var string[]
    */
    protected static $setters = [
            'instances' => 'setInstances',
            'instanceNum' => 'setInstanceNum',
            'pageNo' => 'setPageNo',
            'pageSize' => 'setPageSize',
            'totalRecord' => 'setTotalRecord',
            'totalPage' => 'setTotalPage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instances  DDM实例的信息。
    * instanceNum  租户下的DDM实例个数
    * pageNo  当前页码
    * pageSize  当前页码的数据条数
    * totalRecord  总条数
    * totalPage  总页数
    *
    * @var string[]
    */
    protected static $getters = [
            'instances' => 'getInstances',
            'instanceNum' => 'getInstanceNum',
            'pageNo' => 'getPageNo',
            'pageSize' => 'getPageSize',
            'totalRecord' => 'getTotalRecord',
            'totalPage' => 'getTotalPage'
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
        $this->container['instances'] = isset($data['instances']) ? $data['instances'] : null;
        $this->container['instanceNum'] = isset($data['instanceNum']) ? $data['instanceNum'] : null;
        $this->container['pageNo'] = isset($data['pageNo']) ? $data['pageNo'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['totalRecord'] = isset($data['totalRecord']) ? $data['totalRecord'] : null;
        $this->container['totalPage'] = isset($data['totalPage']) ? $data['totalPage'] : null;
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
    * Gets instances
    *  DDM实例的信息。
    *
    * @return \HuaweiCloud\SDK\Ddm\V1\Model\ShowInstanceBeanResponse[]|null
    */
    public function getInstances()
    {
        return $this->container['instances'];
    }

    /**
    * Sets instances
    *
    * @param \HuaweiCloud\SDK\Ddm\V1\Model\ShowInstanceBeanResponse[]|null $instances DDM实例的信息。
    *
    * @return $this
    */
    public function setInstances($instances)
    {
        $this->container['instances'] = $instances;
        return $this;
    }

    /**
    * Gets instanceNum
    *  租户下的DDM实例个数
    *
    * @return int|null
    */
    public function getInstanceNum()
    {
        return $this->container['instanceNum'];
    }

    /**
    * Sets instanceNum
    *
    * @param int|null $instanceNum 租户下的DDM实例个数
    *
    * @return $this
    */
    public function setInstanceNum($instanceNum)
    {
        $this->container['instanceNum'] = $instanceNum;
        return $this;
    }

    /**
    * Gets pageNo
    *  当前页码
    *
    * @return int|null
    */
    public function getPageNo()
    {
        return $this->container['pageNo'];
    }

    /**
    * Sets pageNo
    *
    * @param int|null $pageNo 当前页码
    *
    * @return $this
    */
    public function setPageNo($pageNo)
    {
        $this->container['pageNo'] = $pageNo;
        return $this;
    }

    /**
    * Gets pageSize
    *  当前页码的数据条数
    *
    * @return int|null
    */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
    * Sets pageSize
    *
    * @param int|null $pageSize 当前页码的数据条数
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets totalRecord
    *  总条数
    *
    * @return int|null
    */
    public function getTotalRecord()
    {
        return $this->container['totalRecord'];
    }

    /**
    * Sets totalRecord
    *
    * @param int|null $totalRecord 总条数
    *
    * @return $this
    */
    public function setTotalRecord($totalRecord)
    {
        $this->container['totalRecord'] = $totalRecord;
        return $this;
    }

    /**
    * Gets totalPage
    *  总页数
    *
    * @return int|null
    */
    public function getTotalPage()
    {
        return $this->container['totalPage'];
    }

    /**
    * Sets totalPage
    *
    * @param int|null $totalPage 总页数
    *
    * @return $this
    */
    public function setTotalPage($totalPage)
    {
        $this->container['totalPage'] = $totalPage;
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

