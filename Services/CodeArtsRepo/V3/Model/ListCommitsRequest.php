<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCommitsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCommitsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * repoId  仓库短id
    * refName  仓库的branch名或tag名，如果为空则查询默认分支
    * since  在此日期之后或当天提交，格式 YYYY-MM-DDTHH:MM:SSZ
    * until  在此日期之前或当天提交，格式 YYYY-MM-DDTHH:MM:SSZ
    * path  文件路径
    * all  是否检索仓库中每个提交
    * withStats  有关每个提交的统计信息是否添加到响应中
    * page  页码
    * perPage  每页条目数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'repoId' => 'int',
            'refName' => 'string',
            'since' => 'string',
            'until' => 'string',
            'path' => 'string',
            'all' => 'bool',
            'withStats' => 'bool',
            'page' => 'int',
            'perPage' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * repoId  仓库短id
    * refName  仓库的branch名或tag名，如果为空则查询默认分支
    * since  在此日期之后或当天提交，格式 YYYY-MM-DDTHH:MM:SSZ
    * until  在此日期之前或当天提交，格式 YYYY-MM-DDTHH:MM:SSZ
    * path  文件路径
    * all  是否检索仓库中每个提交
    * withStats  有关每个提交的统计信息是否添加到响应中
    * page  页码
    * perPage  每页条目数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'repoId' => 'int32',
        'refName' => null,
        'since' => null,
        'until' => null,
        'path' => null,
        'all' => null,
        'withStats' => null,
        'page' => 'int32',
        'perPage' => 'int32'
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
    * repoId  仓库短id
    * refName  仓库的branch名或tag名，如果为空则查询默认分支
    * since  在此日期之后或当天提交，格式 YYYY-MM-DDTHH:MM:SSZ
    * until  在此日期之前或当天提交，格式 YYYY-MM-DDTHH:MM:SSZ
    * path  文件路径
    * all  是否检索仓库中每个提交
    * withStats  有关每个提交的统计信息是否添加到响应中
    * page  页码
    * perPage  每页条目数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'repoId' => 'repo_id',
            'refName' => 'ref_name',
            'since' => 'since',
            'until' => 'until',
            'path' => 'path',
            'all' => 'all',
            'withStats' => 'with_stats',
            'page' => 'page',
            'perPage' => 'per_page'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * repoId  仓库短id
    * refName  仓库的branch名或tag名，如果为空则查询默认分支
    * since  在此日期之后或当天提交，格式 YYYY-MM-DDTHH:MM:SSZ
    * until  在此日期之前或当天提交，格式 YYYY-MM-DDTHH:MM:SSZ
    * path  文件路径
    * all  是否检索仓库中每个提交
    * withStats  有关每个提交的统计信息是否添加到响应中
    * page  页码
    * perPage  每页条目数
    *
    * @var string[]
    */
    protected static $setters = [
            'repoId' => 'setRepoId',
            'refName' => 'setRefName',
            'since' => 'setSince',
            'until' => 'setUntil',
            'path' => 'setPath',
            'all' => 'setAll',
            'withStats' => 'setWithStats',
            'page' => 'setPage',
            'perPage' => 'setPerPage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * repoId  仓库短id
    * refName  仓库的branch名或tag名，如果为空则查询默认分支
    * since  在此日期之后或当天提交，格式 YYYY-MM-DDTHH:MM:SSZ
    * until  在此日期之前或当天提交，格式 YYYY-MM-DDTHH:MM:SSZ
    * path  文件路径
    * all  是否检索仓库中每个提交
    * withStats  有关每个提交的统计信息是否添加到响应中
    * page  页码
    * perPage  每页条目数
    *
    * @var string[]
    */
    protected static $getters = [
            'repoId' => 'getRepoId',
            'refName' => 'getRefName',
            'since' => 'getSince',
            'until' => 'getUntil',
            'path' => 'getPath',
            'all' => 'getAll',
            'withStats' => 'getWithStats',
            'page' => 'getPage',
            'perPage' => 'getPerPage'
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
        $this->container['repoId'] = isset($data['repoId']) ? $data['repoId'] : null;
        $this->container['refName'] = isset($data['refName']) ? $data['refName'] : null;
        $this->container['since'] = isset($data['since']) ? $data['since'] : null;
        $this->container['until'] = isset($data['until']) ? $data['until'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['all'] = isset($data['all']) ? $data['all'] : null;
        $this->container['withStats'] = isset($data['withStats']) ? $data['withStats'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['perPage'] = isset($data['perPage']) ? $data['perPage'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['repoId'] === null) {
            $invalidProperties[] = "'repoId' can't be null";
        }
            if (!is_null($this->container['page']) && ($this->container['page'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'page', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['page']) && ($this->container['page'] < 1)) {
                $invalidProperties[] = "invalid value for 'page', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['perPage']) && ($this->container['perPage'] > 100)) {
                $invalidProperties[] = "invalid value for 'perPage', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['perPage']) && ($this->container['perPage'] < 1)) {
                $invalidProperties[] = "invalid value for 'perPage', must be bigger than or equal to 1.";
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
    * Gets repoId
    *  仓库短id
    *
    * @return int
    */
    public function getRepoId()
    {
        return $this->container['repoId'];
    }

    /**
    * Sets repoId
    *
    * @param int $repoId 仓库短id
    *
    * @return $this
    */
    public function setRepoId($repoId)
    {
        $this->container['repoId'] = $repoId;
        return $this;
    }

    /**
    * Gets refName
    *  仓库的branch名或tag名，如果为空则查询默认分支
    *
    * @return string|null
    */
    public function getRefName()
    {
        return $this->container['refName'];
    }

    /**
    * Sets refName
    *
    * @param string|null $refName 仓库的branch名或tag名，如果为空则查询默认分支
    *
    * @return $this
    */
    public function setRefName($refName)
    {
        $this->container['refName'] = $refName;
        return $this;
    }

    /**
    * Gets since
    *  在此日期之后或当天提交，格式 YYYY-MM-DDTHH:MM:SSZ
    *
    * @return string|null
    */
    public function getSince()
    {
        return $this->container['since'];
    }

    /**
    * Sets since
    *
    * @param string|null $since 在此日期之后或当天提交，格式 YYYY-MM-DDTHH:MM:SSZ
    *
    * @return $this
    */
    public function setSince($since)
    {
        $this->container['since'] = $since;
        return $this;
    }

    /**
    * Gets until
    *  在此日期之前或当天提交，格式 YYYY-MM-DDTHH:MM:SSZ
    *
    * @return string|null
    */
    public function getUntil()
    {
        return $this->container['until'];
    }

    /**
    * Sets until
    *
    * @param string|null $until 在此日期之前或当天提交，格式 YYYY-MM-DDTHH:MM:SSZ
    *
    * @return $this
    */
    public function setUntil($until)
    {
        $this->container['until'] = $until;
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
    * Gets all
    *  是否检索仓库中每个提交
    *
    * @return bool|null
    */
    public function getAll()
    {
        return $this->container['all'];
    }

    /**
    * Sets all
    *
    * @param bool|null $all 是否检索仓库中每个提交
    *
    * @return $this
    */
    public function setAll($all)
    {
        $this->container['all'] = $all;
        return $this;
    }

    /**
    * Gets withStats
    *  有关每个提交的统计信息是否添加到响应中
    *
    * @return bool|null
    */
    public function getWithStats()
    {
        return $this->container['withStats'];
    }

    /**
    * Sets withStats
    *
    * @param bool|null $withStats 有关每个提交的统计信息是否添加到响应中
    *
    * @return $this
    */
    public function setWithStats($withStats)
    {
        $this->container['withStats'] = $withStats;
        return $this;
    }

    /**
    * Gets page
    *  页码
    *
    * @return int|null
    */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
    * Sets page
    *
    * @param int|null $page 页码
    *
    * @return $this
    */
    public function setPage($page)
    {
        $this->container['page'] = $page;
        return $this;
    }

    /**
    * Gets perPage
    *  每页条目数
    *
    * @return int|null
    */
    public function getPerPage()
    {
        return $this->container['perPage'];
    }

    /**
    * Sets perPage
    *
    * @param int|null $perPage 每页条目数
    *
    * @return $this
    */
    public function setPerPage($perPage)
    {
        $this->container['perPage'] = $perPage;
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

