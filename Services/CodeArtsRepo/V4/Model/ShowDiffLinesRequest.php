<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDiffLinesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDiffLinesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[[查询用户所有仓库](https://support.huaweicloud.com/eu/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_eu)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * filePath  **参数解释：** 文件路径。 **取值范围：** 字符串长度不少于1，不超过10000。
    * commitId  **参数解释：** commit ID。 **取值范围：** 字符串长度不少于1，不超过40。
    * start  **参数解释：** 文件开始行数。
    * end  **参数解释：** 文件结束行数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'repositoryId' => 'int',
            'filePath' => 'string',
            'commitId' => 'string',
            'start' => 'int',
            'end' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[[查询用户所有仓库](https://support.huaweicloud.com/eu/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_eu)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * filePath  **参数解释：** 文件路径。 **取值范围：** 字符串长度不少于1，不超过10000。
    * commitId  **参数解释：** commit ID。 **取值范围：** 字符串长度不少于1，不超过40。
    * start  **参数解释：** 文件开始行数。
    * end  **参数解释：** 文件结束行数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'repositoryId' => null,
        'filePath' => null,
        'commitId' => null,
        'start' => 'int32',
        'end' => 'int32'
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
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[[查询用户所有仓库](https://support.huaweicloud.com/eu/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_eu)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * filePath  **参数解释：** 文件路径。 **取值范围：** 字符串长度不少于1，不超过10000。
    * commitId  **参数解释：** commit ID。 **取值范围：** 字符串长度不少于1，不超过40。
    * start  **参数解释：** 文件开始行数。
    * end  **参数解释：** 文件结束行数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'repositoryId' => 'repository_id',
            'filePath' => 'file_path',
            'commitId' => 'commit_id',
            'start' => 'start',
            'end' => 'end'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[[查询用户所有仓库](https://support.huaweicloud.com/eu/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_eu)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * filePath  **参数解释：** 文件路径。 **取值范围：** 字符串长度不少于1，不超过10000。
    * commitId  **参数解释：** commit ID。 **取值范围：** 字符串长度不少于1，不超过40。
    * start  **参数解释：** 文件开始行数。
    * end  **参数解释：** 文件结束行数。
    *
    * @var string[]
    */
    protected static $setters = [
            'repositoryId' => 'setRepositoryId',
            'filePath' => 'setFilePath',
            'commitId' => 'setCommitId',
            'start' => 'setStart',
            'end' => 'setEnd'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[[查询用户所有仓库](https://support.huaweicloud.com/eu/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_eu)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * filePath  **参数解释：** 文件路径。 **取值范围：** 字符串长度不少于1，不超过10000。
    * commitId  **参数解释：** commit ID。 **取值范围：** 字符串长度不少于1，不超过40。
    * start  **参数解释：** 文件开始行数。
    * end  **参数解释：** 文件结束行数。
    *
    * @var string[]
    */
    protected static $getters = [
            'repositoryId' => 'getRepositoryId',
            'filePath' => 'getFilePath',
            'commitId' => 'getCommitId',
            'start' => 'getStart',
            'end' => 'getEnd'
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
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
        $this->container['commitId'] = isset($data['commitId']) ? $data['commitId'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['end'] = isset($data['end']) ? $data['end'] : null;
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
            if (($this->container['repositoryId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'repositoryId', must be smaller than or equal to 2147483647.";
            }
            if (($this->container['repositoryId'] < 1)) {
                $invalidProperties[] = "invalid value for 'repositoryId', must be bigger than or equal to 1.";
            }
        if ($this->container['filePath'] === null) {
            $invalidProperties[] = "'filePath' can't be null";
        }
            if ((mb_strlen($this->container['filePath']) > 10000)) {
                $invalidProperties[] = "invalid value for 'filePath', the character length must be smaller than or equal to 10000.";
            }
            if ((mb_strlen($this->container['filePath']) < 1)) {
                $invalidProperties[] = "invalid value for 'filePath', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['commitId'] === null) {
            $invalidProperties[] = "'commitId' can't be null";
        }
            if ((mb_strlen($this->container['commitId']) > 40)) {
                $invalidProperties[] = "invalid value for 'commitId', the character length must be smaller than or equal to 40.";
            }
            if ((mb_strlen($this->container['commitId']) < 1)) {
                $invalidProperties[] = "invalid value for 'commitId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['start'] === null) {
            $invalidProperties[] = "'start' can't be null";
        }
            if (($this->container['start'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'start', must be smaller than or equal to 2147483647.";
            }
            if (($this->container['start'] < 1)) {
                $invalidProperties[] = "invalid value for 'start', must be bigger than or equal to 1.";
            }
        if ($this->container['end'] === null) {
            $invalidProperties[] = "'end' can't be null";
        }
            if (($this->container['end'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'end', must be smaller than or equal to 2147483647.";
            }
            if (($this->container['end'] < 1)) {
                $invalidProperties[] = "invalid value for 'end', must be bigger than or equal to 1.";
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
    *  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[[查询用户所有仓库](https://support.huaweicloud.com/eu/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_eu)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
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
    * @param int $repositoryId **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[[查询用户所有仓库](https://support.huaweicloud.com/eu/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_eu)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setRepositoryId($repositoryId)
    {
        $this->container['repositoryId'] = $repositoryId;
        return $this;
    }

    /**
    * Gets filePath
    *  **参数解释：** 文件路径。 **取值范围：** 字符串长度不少于1，不超过10000。
    *
    * @return string
    */
    public function getFilePath()
    {
        return $this->container['filePath'];
    }

    /**
    * Sets filePath
    *
    * @param string $filePath **参数解释：** 文件路径。 **取值范围：** 字符串长度不少于1，不超过10000。
    *
    * @return $this
    */
    public function setFilePath($filePath)
    {
        $this->container['filePath'] = $filePath;
        return $this;
    }

    /**
    * Gets commitId
    *  **参数解释：** commit ID。 **取值范围：** 字符串长度不少于1，不超过40。
    *
    * @return string
    */
    public function getCommitId()
    {
        return $this->container['commitId'];
    }

    /**
    * Sets commitId
    *
    * @param string $commitId **参数解释：** commit ID。 **取值范围：** 字符串长度不少于1，不超过40。
    *
    * @return $this
    */
    public function setCommitId($commitId)
    {
        $this->container['commitId'] = $commitId;
        return $this;
    }

    /**
    * Gets start
    *  **参数解释：** 文件开始行数。
    *
    * @return int
    */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
    * Sets start
    *
    * @param int $start **参数解释：** 文件开始行数。
    *
    * @return $this
    */
    public function setStart($start)
    {
        $this->container['start'] = $start;
        return $this;
    }

    /**
    * Gets end
    *  **参数解释：** 文件结束行数。
    *
    * @return int
    */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
    * Sets end
    *
    * @param int $end **参数解释：** 文件结束行数。
    *
    * @return $this
    */
    public function setEnd($end)
    {
        $this->container['end'] = $end;
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

