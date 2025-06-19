<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateTestSuitByRepoFileInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateTestSuitByRepoFileInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * testsuiteName  要生成的测试套名称
    * repositoryId  仓库id
    * repositoryBranch  仓库分支
    * filePath  仓库中yaml或json文件的相对路径，仅支持swagger 2.0版本的yaml和json文件
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'testsuiteName' => 'string',
            'repositoryId' => 'string',
            'repositoryBranch' => 'string',
            'filePath' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * testsuiteName  要生成的测试套名称
    * repositoryId  仓库id
    * repositoryBranch  仓库分支
    * filePath  仓库中yaml或json文件的相对路径，仅支持swagger 2.0版本的yaml和json文件
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'testsuiteName' => null,
        'repositoryId' => null,
        'repositoryBranch' => null,
        'filePath' => null
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
    * testsuiteName  要生成的测试套名称
    * repositoryId  仓库id
    * repositoryBranch  仓库分支
    * filePath  仓库中yaml或json文件的相对路径，仅支持swagger 2.0版本的yaml和json文件
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'testsuiteName' => 'testsuite_name',
            'repositoryId' => 'repository_id',
            'repositoryBranch' => 'repository_branch',
            'filePath' => 'file_path'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * testsuiteName  要生成的测试套名称
    * repositoryId  仓库id
    * repositoryBranch  仓库分支
    * filePath  仓库中yaml或json文件的相对路径，仅支持swagger 2.0版本的yaml和json文件
    *
    * @var string[]
    */
    protected static $setters = [
            'testsuiteName' => 'setTestsuiteName',
            'repositoryId' => 'setRepositoryId',
            'repositoryBranch' => 'setRepositoryBranch',
            'filePath' => 'setFilePath'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * testsuiteName  要生成的测试套名称
    * repositoryId  仓库id
    * repositoryBranch  仓库分支
    * filePath  仓库中yaml或json文件的相对路径，仅支持swagger 2.0版本的yaml和json文件
    *
    * @var string[]
    */
    protected static $getters = [
            'testsuiteName' => 'getTestsuiteName',
            'repositoryId' => 'getRepositoryId',
            'repositoryBranch' => 'getRepositoryBranch',
            'filePath' => 'getFilePath'
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
        $this->container['testsuiteName'] = isset($data['testsuiteName']) ? $data['testsuiteName'] : null;
        $this->container['repositoryId'] = isset($data['repositoryId']) ? $data['repositoryId'] : null;
        $this->container['repositoryBranch'] = isset($data['repositoryBranch']) ? $data['repositoryBranch'] : null;
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['testsuiteName'] === null) {
            $invalidProperties[] = "'testsuiteName' can't be null";
        }
            if ((mb_strlen($this->container['testsuiteName']) > 128)) {
                $invalidProperties[] = "invalid value for 'testsuiteName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['testsuiteName']) < 3)) {
                $invalidProperties[] = "invalid value for 'testsuiteName', the character length must be bigger than or equal to 3.";
            }
        if ($this->container['repositoryId'] === null) {
            $invalidProperties[] = "'repositoryId' can't be null";
        }
            if ((mb_strlen($this->container['repositoryId']) > 32)) {
                $invalidProperties[] = "invalid value for 'repositoryId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['repositoryId']) < 32)) {
                $invalidProperties[] = "invalid value for 'repositoryId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['repositoryBranch'] === null) {
            $invalidProperties[] = "'repositoryBranch' can't be null";
        }
            if ((mb_strlen($this->container['repositoryBranch']) > 100)) {
                $invalidProperties[] = "invalid value for 'repositoryBranch', the character length must be smaller than or equal to 100.";
            }
            if ((mb_strlen($this->container['repositoryBranch']) < 3)) {
                $invalidProperties[] = "invalid value for 'repositoryBranch', the character length must be bigger than or equal to 3.";
            }
        if ($this->container['filePath'] === null) {
            $invalidProperties[] = "'filePath' can't be null";
        }
            if ((mb_strlen($this->container['filePath']) > 128)) {
                $invalidProperties[] = "invalid value for 'filePath', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['filePath']) < 6)) {
                $invalidProperties[] = "invalid value for 'filePath', the character length must be bigger than or equal to 6.";
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
    * Gets testsuiteName
    *  要生成的测试套名称
    *
    * @return string
    */
    public function getTestsuiteName()
    {
        return $this->container['testsuiteName'];
    }

    /**
    * Sets testsuiteName
    *
    * @param string $testsuiteName 要生成的测试套名称
    *
    * @return $this
    */
    public function setTestsuiteName($testsuiteName)
    {
        $this->container['testsuiteName'] = $testsuiteName;
        return $this;
    }

    /**
    * Gets repositoryId
    *  仓库id
    *
    * @return string
    */
    public function getRepositoryId()
    {
        return $this->container['repositoryId'];
    }

    /**
    * Sets repositoryId
    *
    * @param string $repositoryId 仓库id
    *
    * @return $this
    */
    public function setRepositoryId($repositoryId)
    {
        $this->container['repositoryId'] = $repositoryId;
        return $this;
    }

    /**
    * Gets repositoryBranch
    *  仓库分支
    *
    * @return string
    */
    public function getRepositoryBranch()
    {
        return $this->container['repositoryBranch'];
    }

    /**
    * Sets repositoryBranch
    *
    * @param string $repositoryBranch 仓库分支
    *
    * @return $this
    */
    public function setRepositoryBranch($repositoryBranch)
    {
        $this->container['repositoryBranch'] = $repositoryBranch;
        return $this;
    }

    /**
    * Gets filePath
    *  仓库中yaml或json文件的相对路径，仅支持swagger 2.0版本的yaml和json文件
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
    * @param string $filePath 仓库中yaml或json文件的相对路径，仅支持swagger 2.0版本的yaml和json文件
    *
    * @return $this
    */
    public function setFilePath($filePath)
    {
        $this->container['filePath'] = $filePath;
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

