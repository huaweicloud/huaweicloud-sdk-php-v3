<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListDdmsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListDdmsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceNum  **参数解释**：  实例数量。  **参数范围**：  不涉及。
    * instances  **参数解释**：  实例列表的集合。  **参数范围**：  不涉及。
    * pageSize  **参数解释**：  分页大小。  **参数范围**：  不涉及。
    * total  **参数解释**：  实例总量。  **参数范围**：  不涉及。
    * totalPage  **参数解释**：  总分页数。  **参数范围**：  不涉及。
    * pageNo  **参数解释**：  分页序号。  **参数范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceNum' => 'int',
            'instances' => '\HuaweiCloud\SDK\Ddm\V1\Model\CustomerInstanceVO[]',
            'pageSize' => 'int',
            'total' => 'int',
            'totalPage' => 'int',
            'pageNo' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceNum  **参数解释**：  实例数量。  **参数范围**：  不涉及。
    * instances  **参数解释**：  实例列表的集合。  **参数范围**：  不涉及。
    * pageSize  **参数解释**：  分页大小。  **参数范围**：  不涉及。
    * total  **参数解释**：  实例总量。  **参数范围**：  不涉及。
    * totalPage  **参数解释**：  总分页数。  **参数范围**：  不涉及。
    * pageNo  **参数解释**：  分页序号。  **参数范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceNum' => null,
        'instances' => null,
        'pageSize' => null,
        'total' => null,
        'totalPage' => null,
        'pageNo' => null
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
    * instanceNum  **参数解释**：  实例数量。  **参数范围**：  不涉及。
    * instances  **参数解释**：  实例列表的集合。  **参数范围**：  不涉及。
    * pageSize  **参数解释**：  分页大小。  **参数范围**：  不涉及。
    * total  **参数解释**：  实例总量。  **参数范围**：  不涉及。
    * totalPage  **参数解释**：  总分页数。  **参数范围**：  不涉及。
    * pageNo  **参数解释**：  分页序号。  **参数范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceNum' => 'instance_num',
            'instances' => 'instances',
            'pageSize' => 'page_size',
            'total' => 'total',
            'totalPage' => 'total_page',
            'pageNo' => 'page_no'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceNum  **参数解释**：  实例数量。  **参数范围**：  不涉及。
    * instances  **参数解释**：  实例列表的集合。  **参数范围**：  不涉及。
    * pageSize  **参数解释**：  分页大小。  **参数范围**：  不涉及。
    * total  **参数解释**：  实例总量。  **参数范围**：  不涉及。
    * totalPage  **参数解释**：  总分页数。  **参数范围**：  不涉及。
    * pageNo  **参数解释**：  分页序号。  **参数范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceNum' => 'setInstanceNum',
            'instances' => 'setInstances',
            'pageSize' => 'setPageSize',
            'total' => 'setTotal',
            'totalPage' => 'setTotalPage',
            'pageNo' => 'setPageNo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceNum  **参数解释**：  实例数量。  **参数范围**：  不涉及。
    * instances  **参数解释**：  实例列表的集合。  **参数范围**：  不涉及。
    * pageSize  **参数解释**：  分页大小。  **参数范围**：  不涉及。
    * total  **参数解释**：  实例总量。  **参数范围**：  不涉及。
    * totalPage  **参数解释**：  总分页数。  **参数范围**：  不涉及。
    * pageNo  **参数解释**：  分页序号。  **参数范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceNum' => 'getInstanceNum',
            'instances' => 'getInstances',
            'pageSize' => 'getPageSize',
            'total' => 'getTotal',
            'totalPage' => 'getTotalPage',
            'pageNo' => 'getPageNo'
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
        $this->container['instanceNum'] = isset($data['instanceNum']) ? $data['instanceNum'] : null;
        $this->container['instances'] = isset($data['instances']) ? $data['instances'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['totalPage'] = isset($data['totalPage']) ? $data['totalPage'] : null;
        $this->container['pageNo'] = isset($data['pageNo']) ? $data['pageNo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['instanceNum']) && ($this->container['instanceNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'instanceNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['instanceNum']) && ($this->container['instanceNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'instanceNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['pageSize']) && ($this->container['pageSize'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['pageSize']) && ($this->container['pageSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['total']) && ($this->container['total'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'total', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['total']) && ($this->container['total'] < 0)) {
                $invalidProperties[] = "invalid value for 'total', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['totalPage']) && ($this->container['totalPage'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'totalPage', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['totalPage']) && ($this->container['totalPage'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalPage', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['pageNo']) && ($this->container['pageNo'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'pageNo', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['pageNo']) && ($this->container['pageNo'] < 0)) {
                $invalidProperties[] = "invalid value for 'pageNo', must be bigger than or equal to 0.";
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
    * Gets instanceNum
    *  **参数解释**：  实例数量。  **参数范围**：  不涉及。
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
    * @param int|null $instanceNum **参数解释**：  实例数量。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setInstanceNum($instanceNum)
    {
        $this->container['instanceNum'] = $instanceNum;
        return $this;
    }

    /**
    * Gets instances
    *  **参数解释**：  实例列表的集合。  **参数范围**：  不涉及。
    *
    * @return \HuaweiCloud\SDK\Ddm\V1\Model\CustomerInstanceVO[]|null
    */
    public function getInstances()
    {
        return $this->container['instances'];
    }

    /**
    * Sets instances
    *
    * @param \HuaweiCloud\SDK\Ddm\V1\Model\CustomerInstanceVO[]|null $instances **参数解释**：  实例列表的集合。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setInstances($instances)
    {
        $this->container['instances'] = $instances;
        return $this;
    }

    /**
    * Gets pageSize
    *  **参数解释**：  分页大小。  **参数范围**：  不涉及。
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
    * @param int|null $pageSize **参数解释**：  分页大小。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets total
    *  **参数解释**：  实例总量。  **参数范围**：  不涉及。
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total **参数解释**：  实例总量。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets totalPage
    *  **参数解释**：  总分页数。  **参数范围**：  不涉及。
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
    * @param int|null $totalPage **参数解释**：  总分页数。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setTotalPage($totalPage)
    {
        $this->container['totalPage'] = $totalPage;
        return $this;
    }

    /**
    * Gets pageNo
    *  **参数解释**：  分页序号。  **参数范围**：  不涉及。
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
    * @param int|null $pageNo **参数解释**：  分页序号。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setPageNo($pageNo)
    {
        $this->container['pageNo'] = $pageNo;
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

