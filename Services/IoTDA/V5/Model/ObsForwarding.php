<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ObsForwarding implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ObsForwarding';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * regionName  **参数说明**：OBS服务对应的region区域
    * projectId  **参数说明**：OBS服务对应的projectId信息
    * bucketName  **参数说明**：OBS服务对应的桶名称
    * location  **参数说明**：OBS服务对应桶的区域
    * filePath  **参数说明**：OBS服务中存储通道文件的自定义目录,多级目录可用(/)进行分隔，不可以斜杠(/)开头或结尾，不能包含两个以上相邻的斜杠(/) **取值范围**: 英文字母(a-zA-Z)、数字(0-9)、下划线(_)、中划线(-)、斜杠(/)和大括号({})，最大字符长度256个字符。其中大括号只能用于对应模板参数。 **模板参数**:    - \\{YYYY\\} 年   - \\{MM\\} 月   - \\{DD\\} 日   - \\{HH\\} 小时   - \\{appId\\} 应用ID   - \\{deviceId\\} 设备ID   例如:自定义目录结构为\\{YYYY\\}/\\{MM\\}/\\{DD\\}/\\{HH\\},则会在转发数据时，根据当前时间往对应的目录结构2021>08>11>09下生成对应的数据。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'regionName' => 'string',
            'projectId' => 'string',
            'bucketName' => 'string',
            'location' => 'string',
            'filePath' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * regionName  **参数说明**：OBS服务对应的region区域
    * projectId  **参数说明**：OBS服务对应的projectId信息
    * bucketName  **参数说明**：OBS服务对应的桶名称
    * location  **参数说明**：OBS服务对应桶的区域
    * filePath  **参数说明**：OBS服务中存储通道文件的自定义目录,多级目录可用(/)进行分隔，不可以斜杠(/)开头或结尾，不能包含两个以上相邻的斜杠(/) **取值范围**: 英文字母(a-zA-Z)、数字(0-9)、下划线(_)、中划线(-)、斜杠(/)和大括号({})，最大字符长度256个字符。其中大括号只能用于对应模板参数。 **模板参数**:    - \\{YYYY\\} 年   - \\{MM\\} 月   - \\{DD\\} 日   - \\{HH\\} 小时   - \\{appId\\} 应用ID   - \\{deviceId\\} 设备ID   例如:自定义目录结构为\\{YYYY\\}/\\{MM\\}/\\{DD\\}/\\{HH\\},则会在转发数据时，根据当前时间往对应的目录结构2021>08>11>09下生成对应的数据。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'regionName' => null,
        'projectId' => null,
        'bucketName' => null,
        'location' => null,
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
    * regionName  **参数说明**：OBS服务对应的region区域
    * projectId  **参数说明**：OBS服务对应的projectId信息
    * bucketName  **参数说明**：OBS服务对应的桶名称
    * location  **参数说明**：OBS服务对应桶的区域
    * filePath  **参数说明**：OBS服务中存储通道文件的自定义目录,多级目录可用(/)进行分隔，不可以斜杠(/)开头或结尾，不能包含两个以上相邻的斜杠(/) **取值范围**: 英文字母(a-zA-Z)、数字(0-9)、下划线(_)、中划线(-)、斜杠(/)和大括号({})，最大字符长度256个字符。其中大括号只能用于对应模板参数。 **模板参数**:    - \\{YYYY\\} 年   - \\{MM\\} 月   - \\{DD\\} 日   - \\{HH\\} 小时   - \\{appId\\} 应用ID   - \\{deviceId\\} 设备ID   例如:自定义目录结构为\\{YYYY\\}/\\{MM\\}/\\{DD\\}/\\{HH\\},则会在转发数据时，根据当前时间往对应的目录结构2021>08>11>09下生成对应的数据。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'regionName' => 'region_name',
            'projectId' => 'project_id',
            'bucketName' => 'bucket_name',
            'location' => 'location',
            'filePath' => 'file_path'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * regionName  **参数说明**：OBS服务对应的region区域
    * projectId  **参数说明**：OBS服务对应的projectId信息
    * bucketName  **参数说明**：OBS服务对应的桶名称
    * location  **参数说明**：OBS服务对应桶的区域
    * filePath  **参数说明**：OBS服务中存储通道文件的自定义目录,多级目录可用(/)进行分隔，不可以斜杠(/)开头或结尾，不能包含两个以上相邻的斜杠(/) **取值范围**: 英文字母(a-zA-Z)、数字(0-9)、下划线(_)、中划线(-)、斜杠(/)和大括号({})，最大字符长度256个字符。其中大括号只能用于对应模板参数。 **模板参数**:    - \\{YYYY\\} 年   - \\{MM\\} 月   - \\{DD\\} 日   - \\{HH\\} 小时   - \\{appId\\} 应用ID   - \\{deviceId\\} 设备ID   例如:自定义目录结构为\\{YYYY\\}/\\{MM\\}/\\{DD\\}/\\{HH\\},则会在转发数据时，根据当前时间往对应的目录结构2021>08>11>09下生成对应的数据。
    *
    * @var string[]
    */
    protected static $setters = [
            'regionName' => 'setRegionName',
            'projectId' => 'setProjectId',
            'bucketName' => 'setBucketName',
            'location' => 'setLocation',
            'filePath' => 'setFilePath'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * regionName  **参数说明**：OBS服务对应的region区域
    * projectId  **参数说明**：OBS服务对应的projectId信息
    * bucketName  **参数说明**：OBS服务对应的桶名称
    * location  **参数说明**：OBS服务对应桶的区域
    * filePath  **参数说明**：OBS服务中存储通道文件的自定义目录,多级目录可用(/)进行分隔，不可以斜杠(/)开头或结尾，不能包含两个以上相邻的斜杠(/) **取值范围**: 英文字母(a-zA-Z)、数字(0-9)、下划线(_)、中划线(-)、斜杠(/)和大括号({})，最大字符长度256个字符。其中大括号只能用于对应模板参数。 **模板参数**:    - \\{YYYY\\} 年   - \\{MM\\} 月   - \\{DD\\} 日   - \\{HH\\} 小时   - \\{appId\\} 应用ID   - \\{deviceId\\} 设备ID   例如:自定义目录结构为\\{YYYY\\}/\\{MM\\}/\\{DD\\}/\\{HH\\},则会在转发数据时，根据当前时间往对应的目录结构2021>08>11>09下生成对应的数据。
    *
    * @var string[]
    */
    protected static $getters = [
            'regionName' => 'getRegionName',
            'projectId' => 'getProjectId',
            'bucketName' => 'getBucketName',
            'location' => 'getLocation',
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
        $this->container['regionName'] = isset($data['regionName']) ? $data['regionName'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['bucketName'] = isset($data['bucketName']) ? $data['bucketName'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
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
        if ($this->container['regionName'] === null) {
            $invalidProperties[] = "'regionName' can't be null";
        }
            if ((mb_strlen($this->container['regionName']) > 256)) {
                $invalidProperties[] = "invalid value for 'regionName', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['regionName']) < 1)) {
                $invalidProperties[] = "invalid value for 'regionName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 256)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['bucketName'] === null) {
            $invalidProperties[] = "'bucketName' can't be null";
        }
            if ((mb_strlen($this->container['bucketName']) > 256)) {
                $invalidProperties[] = "invalid value for 'bucketName', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['bucketName']) < 1)) {
                $invalidProperties[] = "invalid value for 'bucketName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['location']) && (mb_strlen($this->container['location']) > 256)) {
                $invalidProperties[] = "invalid value for 'location', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['location']) && (mb_strlen($this->container['location']) < 1)) {
                $invalidProperties[] = "invalid value for 'location', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['filePath']) && !preg_match("/^(?!\/)(?![a-zA-Z0-9_\/\\-{}]{1,256}(\/\/))[a-zA-Z0-9_\/\\-{}]{1,256}(?<!\/)$/", $this->container['filePath'])) {
                $invalidProperties[] = "invalid value for 'filePath', must be conform to the pattern /^(?!\/)(?![a-zA-Z0-9_\/\\-{}]{1,256}(\/\/))[a-zA-Z0-9_\/\\-{}]{1,256}(?<!\/)$/.";
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
    * Gets regionName
    *  **参数说明**：OBS服务对应的region区域
    *
    * @return string
    */
    public function getRegionName()
    {
        return $this->container['regionName'];
    }

    /**
    * Sets regionName
    *
    * @param string $regionName **参数说明**：OBS服务对应的region区域
    *
    * @return $this
    */
    public function setRegionName($regionName)
    {
        $this->container['regionName'] = $regionName;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数说明**：OBS服务对应的projectId信息
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId **参数说明**：OBS服务对应的projectId信息
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets bucketName
    *  **参数说明**：OBS服务对应的桶名称
    *
    * @return string
    */
    public function getBucketName()
    {
        return $this->container['bucketName'];
    }

    /**
    * Sets bucketName
    *
    * @param string $bucketName **参数说明**：OBS服务对应的桶名称
    *
    * @return $this
    */
    public function setBucketName($bucketName)
    {
        $this->container['bucketName'] = $bucketName;
        return $this;
    }

    /**
    * Gets location
    *  **参数说明**：OBS服务对应桶的区域
    *
    * @return string|null
    */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
    * Sets location
    *
    * @param string|null $location **参数说明**：OBS服务对应桶的区域
    *
    * @return $this
    */
    public function setLocation($location)
    {
        $this->container['location'] = $location;
        return $this;
    }

    /**
    * Gets filePath
    *  **参数说明**：OBS服务中存储通道文件的自定义目录,多级目录可用(/)进行分隔，不可以斜杠(/)开头或结尾，不能包含两个以上相邻的斜杠(/) **取值范围**: 英文字母(a-zA-Z)、数字(0-9)、下划线(_)、中划线(-)、斜杠(/)和大括号({})，最大字符长度256个字符。其中大括号只能用于对应模板参数。 **模板参数**:    - \\{YYYY\\} 年   - \\{MM\\} 月   - \\{DD\\} 日   - \\{HH\\} 小时   - \\{appId\\} 应用ID   - \\{deviceId\\} 设备ID   例如:自定义目录结构为\\{YYYY\\}/\\{MM\\}/\\{DD\\}/\\{HH\\},则会在转发数据时，根据当前时间往对应的目录结构2021>08>11>09下生成对应的数据。
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
    * @param string|null $filePath **参数说明**：OBS服务中存储通道文件的自定义目录,多级目录可用(/)进行分隔，不可以斜杠(/)开头或结尾，不能包含两个以上相邻的斜杠(/) **取值范围**: 英文字母(a-zA-Z)、数字(0-9)、下划线(_)、中划线(-)、斜杠(/)和大括号({})，最大字符长度256个字符。其中大括号只能用于对应模板参数。 **模板参数**:    - \\{YYYY\\} 年   - \\{MM\\} 月   - \\{DD\\} 日   - \\{HH\\} 小时   - \\{appId\\} 应用ID   - \\{deviceId\\} 设备ID   例如:自定义目录结构为\\{YYYY\\}/\\{MM\\}/\\{DD\\}/\\{HH\\},则会在转发数据时，根据当前时间往对应的目录结构2021>08>11>09下生成对应的数据。
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

