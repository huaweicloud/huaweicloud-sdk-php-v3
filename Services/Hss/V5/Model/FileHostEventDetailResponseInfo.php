<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FileHostEventDetailResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FileHostEventDetailResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  id
    * fileName  文件名称
    * filePath  文件路径
    * status  文件可信状态
    * changeType  变更类型
    * changeCategory  变更类别
    * afterChange  modified hash
    * beforeChange  hash
    * latestTime  最后变更时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'fileName' => 'string',
            'filePath' => 'string',
            'status' => 'string',
            'changeType' => 'string',
            'changeCategory' => 'string',
            'afterChange' => 'string',
            'beforeChange' => 'string',
            'latestTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  id
    * fileName  文件名称
    * filePath  文件路径
    * status  文件可信状态
    * changeType  变更类型
    * changeCategory  变更类别
    * afterChange  modified hash
    * beforeChange  hash
    * latestTime  最后变更时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'fileName' => null,
        'filePath' => null,
        'status' => null,
        'changeType' => null,
        'changeCategory' => null,
        'afterChange' => null,
        'beforeChange' => null,
        'latestTime' => 'int64'
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
    * id  id
    * fileName  文件名称
    * filePath  文件路径
    * status  文件可信状态
    * changeType  变更类型
    * changeCategory  变更类别
    * afterChange  modified hash
    * beforeChange  hash
    * latestTime  最后变更时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'fileName' => 'file_name',
            'filePath' => 'file_path',
            'status' => 'status',
            'changeType' => 'change_type',
            'changeCategory' => 'change_category',
            'afterChange' => 'after_change',
            'beforeChange' => 'before_change',
            'latestTime' => 'latest_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  id
    * fileName  文件名称
    * filePath  文件路径
    * status  文件可信状态
    * changeType  变更类型
    * changeCategory  变更类别
    * afterChange  modified hash
    * beforeChange  hash
    * latestTime  最后变更时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'fileName' => 'setFileName',
            'filePath' => 'setFilePath',
            'status' => 'setStatus',
            'changeType' => 'setChangeType',
            'changeCategory' => 'setChangeCategory',
            'afterChange' => 'setAfterChange',
            'beforeChange' => 'setBeforeChange',
            'latestTime' => 'setLatestTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  id
    * fileName  文件名称
    * filePath  文件路径
    * status  文件可信状态
    * changeType  变更类型
    * changeCategory  变更类别
    * afterChange  modified hash
    * beforeChange  hash
    * latestTime  最后变更时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'fileName' => 'getFileName',
            'filePath' => 'getFilePath',
            'status' => 'getStatus',
            'changeType' => 'getChangeType',
            'changeCategory' => 'getChangeCategory',
            'afterChange' => 'getAfterChange',
            'beforeChange' => 'getBeforeChange',
            'latestTime' => 'getLatestTime'
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
    const STATUS_ALL = 'all';
    const STATUS_TRUST = 'trust';
    const STATUS_UNTRUST = 'untrust';
    const STATUS_UNKNOWN = 'unknown';
    const CHANGE_TYPE_ALL = 'all';
    const CHANGE_TYPE_REGISTRY = 'registry';
    const CHANGE_TYPE_FILE = 'file';
    const CHANGE_CATEGORY_ALL = 'all';
    const CHANGE_CATEGORY_MODIFY = 'modify';
    const CHANGE_CATEGORY_ADD = 'add';
    const CHANGE_CATEGORY_DELETE = 'delete';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ALL,
            self::STATUS_TRUST,
            self::STATUS_UNTRUST,
            self::STATUS_UNKNOWN,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getChangeTypeAllowableValues()
    {
        return [
            self::CHANGE_TYPE_ALL,
            self::CHANGE_TYPE_REGISTRY,
            self::CHANGE_TYPE_FILE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getChangeCategoryAllowableValues()
    {
        return [
            self::CHANGE_CATEGORY_ALL,
            self::CHANGE_CATEGORY_MODIFY,
            self::CHANGE_CATEGORY_ADD,
            self::CHANGE_CATEGORY_DELETE,
        ];
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['fileName'] = isset($data['fileName']) ? $data['fileName'] : null;
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['changeType'] = isset($data['changeType']) ? $data['changeType'] : null;
        $this->container['changeCategory'] = isset($data['changeCategory']) ? $data['changeCategory'] : null;
        $this->container['afterChange'] = isset($data['afterChange']) ? $data['afterChange'] : null;
        $this->container['beforeChange'] = isset($data['beforeChange']) ? $data['beforeChange'] : null;
        $this->container['latestTime'] = isset($data['latestTime']) ? $data['latestTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && ($this->container['id'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] < 0)) {
                $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fileName']) && !preg_match("/^.*$/", $this->container['fileName'])) {
                $invalidProperties[] = "invalid value for 'fileName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['filePath']) && !preg_match("/^.*$/", $this->container['filePath'])) {
                $invalidProperties[] = "invalid value for 'filePath', must be conform to the pattern /^.*$/.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getChangeTypeAllowableValues();
                if (!is_null($this->container['changeType']) && !in_array($this->container['changeType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'changeType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getChangeCategoryAllowableValues();
                if (!is_null($this->container['changeCategory']) && !in_array($this->container['changeCategory'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'changeCategory', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['afterChange']) && !preg_match("/^.*$/", $this->container['afterChange'])) {
                $invalidProperties[] = "invalid value for 'afterChange', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['beforeChange']) && !preg_match("/^.*$/", $this->container['beforeChange'])) {
                $invalidProperties[] = "invalid value for 'beforeChange', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['latestTime']) && ($this->container['latestTime'] > 2147483647000)) {
                $invalidProperties[] = "invalid value for 'latestTime', must be smaller than or equal to 2147483647000.";
            }
            if (!is_null($this->container['latestTime']) && ($this->container['latestTime'] < 1609430400000)) {
                $invalidProperties[] = "invalid value for 'latestTime', must be bigger than or equal to 1609430400000.";
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
    * Gets id
    *  id
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets fileName
    *  文件名称
    *
    * @return string|null
    */
    public function getFileName()
    {
        return $this->container['fileName'];
    }

    /**
    * Sets fileName
    *
    * @param string|null $fileName 文件名称
    *
    * @return $this
    */
    public function setFileName($fileName)
    {
        $this->container['fileName'] = $fileName;
        return $this;
    }

    /**
    * Gets filePath
    *  文件路径
    *
    * @return string|null
    */
    public function getFilePath()
    {
        return $this->container['filePath'];
    }

    /**
    * Sets filePath
    *
    * @param string|null $filePath 文件路径
    *
    * @return $this
    */
    public function setFilePath($filePath)
    {
        $this->container['filePath'] = $filePath;
        return $this;
    }

    /**
    * Gets status
    *  文件可信状态
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
    * @param string|null $status 文件可信状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets changeType
    *  变更类型
    *
    * @return string|null
    */
    public function getChangeType()
    {
        return $this->container['changeType'];
    }

    /**
    * Sets changeType
    *
    * @param string|null $changeType 变更类型
    *
    * @return $this
    */
    public function setChangeType($changeType)
    {
        $this->container['changeType'] = $changeType;
        return $this;
    }

    /**
    * Gets changeCategory
    *  变更类别
    *
    * @return string|null
    */
    public function getChangeCategory()
    {
        return $this->container['changeCategory'];
    }

    /**
    * Sets changeCategory
    *
    * @param string|null $changeCategory 变更类别
    *
    * @return $this
    */
    public function setChangeCategory($changeCategory)
    {
        $this->container['changeCategory'] = $changeCategory;
        return $this;
    }

    /**
    * Gets afterChange
    *  modified hash
    *
    * @return string|null
    */
    public function getAfterChange()
    {
        return $this->container['afterChange'];
    }

    /**
    * Sets afterChange
    *
    * @param string|null $afterChange modified hash
    *
    * @return $this
    */
    public function setAfterChange($afterChange)
    {
        $this->container['afterChange'] = $afterChange;
        return $this;
    }

    /**
    * Gets beforeChange
    *  hash
    *
    * @return string|null
    */
    public function getBeforeChange()
    {
        return $this->container['beforeChange'];
    }

    /**
    * Sets beforeChange
    *
    * @param string|null $beforeChange hash
    *
    * @return $this
    */
    public function setBeforeChange($beforeChange)
    {
        $this->container['beforeChange'] = $beforeChange;
        return $this;
    }

    /**
    * Gets latestTime
    *  最后变更时间
    *
    * @return int|null
    */
    public function getLatestTime()
    {
        return $this->container['latestTime'];
    }

    /**
    * Sets latestTime
    *
    * @param int|null $latestTime 最后变更时间
    *
    * @return $this
    */
    public function setLatestTime($latestTime)
    {
        $this->container['latestTime'] = $latestTime;
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

