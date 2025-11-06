<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowCommitsByRepoIdRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowCommitsByRepoIdRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * author  提交作者
    * beginDate  起始提交日期，格式为yyyy-MM-dd
    * endDate  终止提交日期，格式为yyyy-MM-dd
    * message  提交信息
    * pageIndex  分页索引
    * pageSize  每页数据量
    * path  文件路径
    * refName  分支或标签名，支持SHA格式
    * repositoryId  仓库主键id
    * statFormat  提交的文件变更详情信息（不包含diff）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'author' => 'string',
            'beginDate' => 'string',
            'endDate' => 'string',
            'message' => 'string',
            'pageIndex' => 'int',
            'pageSize' => 'int',
            'path' => 'string',
            'refName' => 'string',
            'repositoryId' => 'int',
            'statFormat' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * author  提交作者
    * beginDate  起始提交日期，格式为yyyy-MM-dd
    * endDate  终止提交日期，格式为yyyy-MM-dd
    * message  提交信息
    * pageIndex  分页索引
    * pageSize  每页数据量
    * path  文件路径
    * refName  分支或标签名，支持SHA格式
    * repositoryId  仓库主键id
    * statFormat  提交的文件变更详情信息（不包含diff）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'author' => null,
        'beginDate' => null,
        'endDate' => null,
        'message' => null,
        'pageIndex' => 'int32',
        'pageSize' => 'int32',
        'path' => null,
        'refName' => null,
        'repositoryId' => 'int32',
        'statFormat' => null
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
    * author  提交作者
    * beginDate  起始提交日期，格式为yyyy-MM-dd
    * endDate  终止提交日期，格式为yyyy-MM-dd
    * message  提交信息
    * pageIndex  分页索引
    * pageSize  每页数据量
    * path  文件路径
    * refName  分支或标签名，支持SHA格式
    * repositoryId  仓库主键id
    * statFormat  提交的文件变更详情信息（不包含diff）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'author' => 'author',
            'beginDate' => 'begin_date',
            'endDate' => 'end_date',
            'message' => 'message',
            'pageIndex' => 'page_index',
            'pageSize' => 'page_size',
            'path' => 'path',
            'refName' => 'ref_name',
            'repositoryId' => 'repository_id',
            'statFormat' => 'stat_format'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * author  提交作者
    * beginDate  起始提交日期，格式为yyyy-MM-dd
    * endDate  终止提交日期，格式为yyyy-MM-dd
    * message  提交信息
    * pageIndex  分页索引
    * pageSize  每页数据量
    * path  文件路径
    * refName  分支或标签名，支持SHA格式
    * repositoryId  仓库主键id
    * statFormat  提交的文件变更详情信息（不包含diff）
    *
    * @var string[]
    */
    protected static $setters = [
            'author' => 'setAuthor',
            'beginDate' => 'setBeginDate',
            'endDate' => 'setEndDate',
            'message' => 'setMessage',
            'pageIndex' => 'setPageIndex',
            'pageSize' => 'setPageSize',
            'path' => 'setPath',
            'refName' => 'setRefName',
            'repositoryId' => 'setRepositoryId',
            'statFormat' => 'setStatFormat'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * author  提交作者
    * beginDate  起始提交日期，格式为yyyy-MM-dd
    * endDate  终止提交日期，格式为yyyy-MM-dd
    * message  提交信息
    * pageIndex  分页索引
    * pageSize  每页数据量
    * path  文件路径
    * refName  分支或标签名，支持SHA格式
    * repositoryId  仓库主键id
    * statFormat  提交的文件变更详情信息（不包含diff）
    *
    * @var string[]
    */
    protected static $getters = [
            'author' => 'getAuthor',
            'beginDate' => 'getBeginDate',
            'endDate' => 'getEndDate',
            'message' => 'getMessage',
            'pageIndex' => 'getPageIndex',
            'pageSize' => 'getPageSize',
            'path' => 'getPath',
            'refName' => 'getRefName',
            'repositoryId' => 'getRepositoryId',
            'statFormat' => 'getStatFormat'
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
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['beginDate'] = isset($data['beginDate']) ? $data['beginDate'] : null;
        $this->container['endDate'] = isset($data['endDate']) ? $data['endDate'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['pageIndex'] = isset($data['pageIndex']) ? $data['pageIndex'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['refName'] = isset($data['refName']) ? $data['refName'] : null;
        $this->container['repositoryId'] = isset($data['repositoryId']) ? $data['repositoryId'] : null;
        $this->container['statFormat'] = isset($data['statFormat']) ? $data['statFormat'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['refName'] === null) {
            $invalidProperties[] = "'refName' can't be null";
        }
        if ($this->container['repositoryId'] === null) {
            $invalidProperties[] = "'repositoryId' can't be null";
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
    * Gets author
    *  提交作者
    *
    * @return string|null
    */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
    * Sets author
    *
    * @param string|null $author 提交作者
    *
    * @return $this
    */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;
        return $this;
    }

    /**
    * Gets beginDate
    *  起始提交日期，格式为yyyy-MM-dd
    *
    * @return string|null
    */
    public function getBeginDate()
    {
        return $this->container['beginDate'];
    }

    /**
    * Sets beginDate
    *
    * @param string|null $beginDate 起始提交日期，格式为yyyy-MM-dd
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
    *  终止提交日期，格式为yyyy-MM-dd
    *
    * @return string|null
    */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
    * Sets endDate
    *
    * @param string|null $endDate 终止提交日期，格式为yyyy-MM-dd
    *
    * @return $this
    */
    public function setEndDate($endDate)
    {
        $this->container['endDate'] = $endDate;
        return $this;
    }

    /**
    * Gets message
    *  提交信息
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message 提交信息
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets pageIndex
    *  分页索引
    *
    * @return int|null
    */
    public function getPageIndex()
    {
        return $this->container['pageIndex'];
    }

    /**
    * Sets pageIndex
    *
    * @param int|null $pageIndex 分页索引
    *
    * @return $this
    */
    public function setPageIndex($pageIndex)
    {
        $this->container['pageIndex'] = $pageIndex;
        return $this;
    }

    /**
    * Gets pageSize
    *  每页数据量
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
    * @param int|null $pageSize 每页数据量
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets path
    *  文件路径
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path 文件路径
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets refName
    *  分支或标签名，支持SHA格式
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
    * @param string $refName 分支或标签名，支持SHA格式
    *
    * @return $this
    */
    public function setRefName($refName)
    {
        $this->container['refName'] = $refName;
        return $this;
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
    * Gets statFormat
    *  提交的文件变更详情信息（不包含diff）
    *
    * @return string|null
    */
    public function getStatFormat()
    {
        return $this->container['statFormat'];
    }

    /**
    * Sets statFormat
    *
    * @param string|null $statFormat 提交的文件变更详情信息（不包含diff）
    *
    * @return $this
    */
    public function setStatFormat($statFormat)
    {
        $this->container['statFormat'] = $statFormat;
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

