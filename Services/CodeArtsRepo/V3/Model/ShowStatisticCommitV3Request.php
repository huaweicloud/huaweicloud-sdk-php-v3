<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowStatisticCommitV3Request implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowStatisticCommitV3Request';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * repositoryId  仓库短id
    * refName  分支名称
    * beginDate  起始提交日期,格式为yyyy-MM-dd
    * endDate  终止提交日期,格式为yyyy-MM-dd（begin_date和end_date时间间隔不超过60天）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'repositoryId' => 'int',
            'refName' => 'string',
            'beginDate' => 'string',
            'endDate' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * repositoryId  仓库短id
    * refName  分支名称
    * beginDate  起始提交日期,格式为yyyy-MM-dd
    * endDate  终止提交日期,格式为yyyy-MM-dd（begin_date和end_date时间间隔不超过60天）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'repositoryId' => 'int32',
        'refName' => null,
        'beginDate' => null,
        'endDate' => null
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
    * repositoryId  仓库短id
    * refName  分支名称
    * beginDate  起始提交日期,格式为yyyy-MM-dd
    * endDate  终止提交日期,格式为yyyy-MM-dd（begin_date和end_date时间间隔不超过60天）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'repositoryId' => 'repository_id',
            'refName' => 'ref_name',
            'beginDate' => 'begin_date',
            'endDate' => 'end_date'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * repositoryId  仓库短id
    * refName  分支名称
    * beginDate  起始提交日期,格式为yyyy-MM-dd
    * endDate  终止提交日期,格式为yyyy-MM-dd（begin_date和end_date时间间隔不超过60天）
    *
    * @var string[]
    */
    protected static $setters = [
            'repositoryId' => 'setRepositoryId',
            'refName' => 'setRefName',
            'beginDate' => 'setBeginDate',
            'endDate' => 'setEndDate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * repositoryId  仓库短id
    * refName  分支名称
    * beginDate  起始提交日期,格式为yyyy-MM-dd
    * endDate  终止提交日期,格式为yyyy-MM-dd（begin_date和end_date时间间隔不超过60天）
    *
    * @var string[]
    */
    protected static $getters = [
            'repositoryId' => 'getRepositoryId',
            'refName' => 'getRefName',
            'beginDate' => 'getBeginDate',
            'endDate' => 'getEndDate'
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
        $this->container['repositoryId'] = isset($data['repositoryId']) ? $data['repositoryId'] : null;
        $this->container['refName'] = isset($data['refName']) ? $data['refName'] : null;
        $this->container['beginDate'] = isset($data['beginDate']) ? $data['beginDate'] : null;
        $this->container['endDate'] = isset($data['endDate']) ? $data['endDate'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['repositoryId'] === null) {
            $invalidProperties[] = "'repositoryId' can't be null";
        }
        if ($this->container['refName'] === null) {
            $invalidProperties[] = "'refName' can't be null";
        }
        if ($this->container['beginDate'] === null) {
            $invalidProperties[] = "'beginDate' can't be null";
        }
        if ($this->container['endDate'] === null) {
            $invalidProperties[] = "'endDate' can't be null";
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
    * Gets repositoryId
    *  仓库短id
    *
    * @return int
    */
    public function getRepositoryId()
    {
        return $this->container['repositoryId'];
    }

    /**
    * Sets repositoryId
    *
    * @param int $repositoryId 仓库短id
    *
    * @return $this
    */
    public function setRepositoryId($repositoryId)
    {
        $this->container['repositoryId'] = $repositoryId;
        return $this;
    }

    /**
    * Gets refName
    *  分支名称
    *
    * @return string
    */
    public function getRefName()
    {
        return $this->container['refName'];
    }

    /**
    * Sets refName
    *
    * @param string $refName 分支名称
    *
    * @return $this
    */
    public function setRefName($refName)
    {
        $this->container['refName'] = $refName;
        return $this;
    }

    /**
    * Gets beginDate
    *  起始提交日期,格式为yyyy-MM-dd
    *
    * @return string
    */
    public function getBeginDate()
    {
        return $this->container['beginDate'];
    }

    /**
    * Sets beginDate
    *
    * @param string $beginDate 起始提交日期,格式为yyyy-MM-dd
    *
    * @return $this
    */
    public function setBeginDate($beginDate)
    {
        $this->container['beginDate'] = $beginDate;
        return $this;
    }

    /**
    * Gets endDate
    *  终止提交日期,格式为yyyy-MM-dd（begin_date和end_date时间间隔不超过60天）
    *
    * @return string
    */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
    * Sets endDate
    *
    * @param string $endDate 终止提交日期,格式为yyyy-MM-dd（begin_date和end_date时间间隔不超过60天）
    *
    * @return $this
    */
    public function setEndDate($endDate)
    {
        $this->container['endDate'] = $endDate;
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

