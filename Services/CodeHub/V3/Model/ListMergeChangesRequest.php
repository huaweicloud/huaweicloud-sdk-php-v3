<?php

namespace HuaweiCloud\SDK\CodeHub\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListMergeChangesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListMergeChangesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * repositoryId  仓库主键id
    * mergeRequestIid  MR长id
    * filePath  文件路径
    * ignoreWhitespaceChange  是否无视空格
    * forceEncode  是否需要编码
    * view  是否为建议视图
    * commitId  commit的id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'repositoryId' => 'int',
            'mergeRequestIid' => 'string',
            'filePath' => 'string',
            'ignoreWhitespaceChange' => 'bool',
            'forceEncode' => 'bool',
            'view' => 'string',
            'commitId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * repositoryId  仓库主键id
    * mergeRequestIid  MR长id
    * filePath  文件路径
    * ignoreWhitespaceChange  是否无视空格
    * forceEncode  是否需要编码
    * view  是否为建议视图
    * commitId  commit的id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'repositoryId' => 'int32',
        'mergeRequestIid' => null,
        'filePath' => null,
        'ignoreWhitespaceChange' => null,
        'forceEncode' => null,
        'view' => null,
        'commitId' => null
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
    * repositoryId  仓库主键id
    * mergeRequestIid  MR长id
    * filePath  文件路径
    * ignoreWhitespaceChange  是否无视空格
    * forceEncode  是否需要编码
    * view  是否为建议视图
    * commitId  commit的id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'repositoryId' => 'repository_id',
            'mergeRequestIid' => 'merge_request_iid',
            'filePath' => 'file_path',
            'ignoreWhitespaceChange' => 'ignore_whitespace_change',
            'forceEncode' => 'force_encode',
            'view' => 'view',
            'commitId' => 'commit_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * repositoryId  仓库主键id
    * mergeRequestIid  MR长id
    * filePath  文件路径
    * ignoreWhitespaceChange  是否无视空格
    * forceEncode  是否需要编码
    * view  是否为建议视图
    * commitId  commit的id
    *
    * @var string[]
    */
    protected static $setters = [
            'repositoryId' => 'setRepositoryId',
            'mergeRequestIid' => 'setMergeRequestIid',
            'filePath' => 'setFilePath',
            'ignoreWhitespaceChange' => 'setIgnoreWhitespaceChange',
            'forceEncode' => 'setForceEncode',
            'view' => 'setView',
            'commitId' => 'setCommitId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * repositoryId  仓库主键id
    * mergeRequestIid  MR长id
    * filePath  文件路径
    * ignoreWhitespaceChange  是否无视空格
    * forceEncode  是否需要编码
    * view  是否为建议视图
    * commitId  commit的id
    *
    * @var string[]
    */
    protected static $getters = [
            'repositoryId' => 'getRepositoryId',
            'mergeRequestIid' => 'getMergeRequestIid',
            'filePath' => 'getFilePath',
            'ignoreWhitespaceChange' => 'getIgnoreWhitespaceChange',
            'forceEncode' => 'getForceEncode',
            'view' => 'getView',
            'commitId' => 'getCommitId'
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
    const VIEW_SIMPLE = 'simple';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getViewAllowableValues()
    {
        return [
            self::VIEW_SIMPLE,
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
        $this->container['repositoryId'] = isset($data['repositoryId']) ? $data['repositoryId'] : null;
        $this->container['mergeRequestIid'] = isset($data['mergeRequestIid']) ? $data['mergeRequestIid'] : null;
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
        $this->container['ignoreWhitespaceChange'] = isset($data['ignoreWhitespaceChange']) ? $data['ignoreWhitespaceChange'] : null;
        $this->container['forceEncode'] = isset($data['forceEncode']) ? $data['forceEncode'] : null;
        $this->container['view'] = isset($data['view']) ? $data['view'] : null;
        $this->container['commitId'] = isset($data['commitId']) ? $data['commitId'] : null;
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
        if ($this->container['mergeRequestIid'] === null) {
            $invalidProperties[] = "'mergeRequestIid' can't be null";
        }
            $allowedValues = $this->getViewAllowableValues();
                if (!is_null($this->container['view']) && !in_array($this->container['view'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'view', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    *  仓库主键id
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
    * @param int $repositoryId 仓库主键id
    *
    * @return $this
    */
    public function setRepositoryId($repositoryId)
    {
        $this->container['repositoryId'] = $repositoryId;
        return $this;
    }

    /**
    * Gets mergeRequestIid
    *  MR长id
    *
    * @return string
    */
    public function getMergeRequestIid()
    {
        return $this->container['mergeRequestIid'];
    }

    /**
    * Sets mergeRequestIid
    *
    * @param string $mergeRequestIid MR长id
    *
    * @return $this
    */
    public function setMergeRequestIid($mergeRequestIid)
    {
        $this->container['mergeRequestIid'] = $mergeRequestIid;
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
    * Gets ignoreWhitespaceChange
    *  是否无视空格
    *
    * @return bool|null
    */
    public function getIgnoreWhitespaceChange()
    {
        return $this->container['ignoreWhitespaceChange'];
    }

    /**
    * Sets ignoreWhitespaceChange
    *
    * @param bool|null $ignoreWhitespaceChange 是否无视空格
    *
    * @return $this
    */
    public function setIgnoreWhitespaceChange($ignoreWhitespaceChange)
    {
        $this->container['ignoreWhitespaceChange'] = $ignoreWhitespaceChange;
        return $this;
    }

    /**
    * Gets forceEncode
    *  是否需要编码
    *
    * @return bool|null
    */
    public function getForceEncode()
    {
        return $this->container['forceEncode'];
    }

    /**
    * Sets forceEncode
    *
    * @param bool|null $forceEncode 是否需要编码
    *
    * @return $this
    */
    public function setForceEncode($forceEncode)
    {
        $this->container['forceEncode'] = $forceEncode;
        return $this;
    }

    /**
    * Gets view
    *  是否为建议视图
    *
    * @return string|null
    */
    public function getView()
    {
        return $this->container['view'];
    }

    /**
    * Sets view
    *
    * @param string|null $view 是否为建议视图
    *
    * @return $this
    */
    public function setView($view)
    {
        $this->container['view'] = $view;
        return $this;
    }

    /**
    * Gets commitId
    *  commit的id
    *
    * @return string|null
    */
    public function getCommitId()
    {
        return $this->container['commitId'];
    }

    /**
    * Sets commitId
    *
    * @param string|null $commitId commit的id
    *
    * @return $this
    */
    public function setCommitId($commitId)
    {
        $this->container['commitId'] = $commitId;
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

