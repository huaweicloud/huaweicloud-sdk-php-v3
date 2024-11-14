<?php

namespace HuaweiCloud\SDK\SFSTurbo\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ObsTargetAttributes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ObsTargetAttributes';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fileMode  导入的文件权限。取值范围是0到777。  第一位表示文件所有者的权限，取值范围是0到7；第二位表示文件所属用户组的权限，取值范围是0到7；第三位表示其他用户的权限，取值范围是0到7。文件所有者由uid指定，文件所属用户组由gid指定，不是文件所有者且不在文件所属用户组的用户为其他用户。  数字4、2、1分别表示读、写、执行权限，这些数字相加，即可得到所需的权限组合。例如：750中第一位7代表该文件所有者对该文件具有读、写、执行权限；第二位5代表该文件所属用户组对该文件具有读、执行权限；第三位0代表其他用户对该文件无权限。
    * dirMode  导入的目录权限。取值范围是0到777。  第一位表示目录所有者的权限，取值范围是0到7；第二位表示目录所属用户组的权限，取值范围是0到7；第三位表示其他用户的权限，取值范围是0到7。目录所有者由uid指定，目录所属用户组由gid指定，不是目录所有者且不在目录所属用户组的用户为其他用户。  数字4、2、1分别表示读、写、执行权限，这些数字相加，即可得到所需的权限组合。例如：750中第一位7代表该目录所有者对该目录具有读、写、执行权限；第二位5代表该目录所属用户组对该目录具有读、执行权限；第三位0代表其他用户对该文件无权限。
    * uid  导入对象所有者的用户id，默认值是0，取值范围是0到4,294,967,294（即2^32-2）。
    * gid  导入对象所属用户组id，默认值是0，取值范围是0到4,294,967,294（即2^32-2）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fileMode' => 'int',
            'dirMode' => 'int',
            'uid' => 'int',
            'gid' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fileMode  导入的文件权限。取值范围是0到777。  第一位表示文件所有者的权限，取值范围是0到7；第二位表示文件所属用户组的权限，取值范围是0到7；第三位表示其他用户的权限，取值范围是0到7。文件所有者由uid指定，文件所属用户组由gid指定，不是文件所有者且不在文件所属用户组的用户为其他用户。  数字4、2、1分别表示读、写、执行权限，这些数字相加，即可得到所需的权限组合。例如：750中第一位7代表该文件所有者对该文件具有读、写、执行权限；第二位5代表该文件所属用户组对该文件具有读、执行权限；第三位0代表其他用户对该文件无权限。
    * dirMode  导入的目录权限。取值范围是0到777。  第一位表示目录所有者的权限，取值范围是0到7；第二位表示目录所属用户组的权限，取值范围是0到7；第三位表示其他用户的权限，取值范围是0到7。目录所有者由uid指定，目录所属用户组由gid指定，不是目录所有者且不在目录所属用户组的用户为其他用户。  数字4、2、1分别表示读、写、执行权限，这些数字相加，即可得到所需的权限组合。例如：750中第一位7代表该目录所有者对该目录具有读、写、执行权限；第二位5代表该目录所属用户组对该目录具有读、执行权限；第三位0代表其他用户对该文件无权限。
    * uid  导入对象所有者的用户id，默认值是0，取值范围是0到4,294,967,294（即2^32-2）。
    * gid  导入对象所属用户组id，默认值是0，取值范围是0到4,294,967,294（即2^32-2）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fileMode' => null,
        'dirMode' => null,
        'uid' => null,
        'gid' => null
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
    * fileMode  导入的文件权限。取值范围是0到777。  第一位表示文件所有者的权限，取值范围是0到7；第二位表示文件所属用户组的权限，取值范围是0到7；第三位表示其他用户的权限，取值范围是0到7。文件所有者由uid指定，文件所属用户组由gid指定，不是文件所有者且不在文件所属用户组的用户为其他用户。  数字4、2、1分别表示读、写、执行权限，这些数字相加，即可得到所需的权限组合。例如：750中第一位7代表该文件所有者对该文件具有读、写、执行权限；第二位5代表该文件所属用户组对该文件具有读、执行权限；第三位0代表其他用户对该文件无权限。
    * dirMode  导入的目录权限。取值范围是0到777。  第一位表示目录所有者的权限，取值范围是0到7；第二位表示目录所属用户组的权限，取值范围是0到7；第三位表示其他用户的权限，取值范围是0到7。目录所有者由uid指定，目录所属用户组由gid指定，不是目录所有者且不在目录所属用户组的用户为其他用户。  数字4、2、1分别表示读、写、执行权限，这些数字相加，即可得到所需的权限组合。例如：750中第一位7代表该目录所有者对该目录具有读、写、执行权限；第二位5代表该目录所属用户组对该目录具有读、执行权限；第三位0代表其他用户对该文件无权限。
    * uid  导入对象所有者的用户id，默认值是0，取值范围是0到4,294,967,294（即2^32-2）。
    * gid  导入对象所属用户组id，默认值是0，取值范围是0到4,294,967,294（即2^32-2）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fileMode' => 'file_mode',
            'dirMode' => 'dir_mode',
            'uid' => 'uid',
            'gid' => 'gid'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fileMode  导入的文件权限。取值范围是0到777。  第一位表示文件所有者的权限，取值范围是0到7；第二位表示文件所属用户组的权限，取值范围是0到7；第三位表示其他用户的权限，取值范围是0到7。文件所有者由uid指定，文件所属用户组由gid指定，不是文件所有者且不在文件所属用户组的用户为其他用户。  数字4、2、1分别表示读、写、执行权限，这些数字相加，即可得到所需的权限组合。例如：750中第一位7代表该文件所有者对该文件具有读、写、执行权限；第二位5代表该文件所属用户组对该文件具有读、执行权限；第三位0代表其他用户对该文件无权限。
    * dirMode  导入的目录权限。取值范围是0到777。  第一位表示目录所有者的权限，取值范围是0到7；第二位表示目录所属用户组的权限，取值范围是0到7；第三位表示其他用户的权限，取值范围是0到7。目录所有者由uid指定，目录所属用户组由gid指定，不是目录所有者且不在目录所属用户组的用户为其他用户。  数字4、2、1分别表示读、写、执行权限，这些数字相加，即可得到所需的权限组合。例如：750中第一位7代表该目录所有者对该目录具有读、写、执行权限；第二位5代表该目录所属用户组对该目录具有读、执行权限；第三位0代表其他用户对该文件无权限。
    * uid  导入对象所有者的用户id，默认值是0，取值范围是0到4,294,967,294（即2^32-2）。
    * gid  导入对象所属用户组id，默认值是0，取值范围是0到4,294,967,294（即2^32-2）。
    *
    * @var string[]
    */
    protected static $setters = [
            'fileMode' => 'setFileMode',
            'dirMode' => 'setDirMode',
            'uid' => 'setUid',
            'gid' => 'setGid'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fileMode  导入的文件权限。取值范围是0到777。  第一位表示文件所有者的权限，取值范围是0到7；第二位表示文件所属用户组的权限，取值范围是0到7；第三位表示其他用户的权限，取值范围是0到7。文件所有者由uid指定，文件所属用户组由gid指定，不是文件所有者且不在文件所属用户组的用户为其他用户。  数字4、2、1分别表示读、写、执行权限，这些数字相加，即可得到所需的权限组合。例如：750中第一位7代表该文件所有者对该文件具有读、写、执行权限；第二位5代表该文件所属用户组对该文件具有读、执行权限；第三位0代表其他用户对该文件无权限。
    * dirMode  导入的目录权限。取值范围是0到777。  第一位表示目录所有者的权限，取值范围是0到7；第二位表示目录所属用户组的权限，取值范围是0到7；第三位表示其他用户的权限，取值范围是0到7。目录所有者由uid指定，目录所属用户组由gid指定，不是目录所有者且不在目录所属用户组的用户为其他用户。  数字4、2、1分别表示读、写、执行权限，这些数字相加，即可得到所需的权限组合。例如：750中第一位7代表该目录所有者对该目录具有读、写、执行权限；第二位5代表该目录所属用户组对该目录具有读、执行权限；第三位0代表其他用户对该文件无权限。
    * uid  导入对象所有者的用户id，默认值是0，取值范围是0到4,294,967,294（即2^32-2）。
    * gid  导入对象所属用户组id，默认值是0，取值范围是0到4,294,967,294（即2^32-2）。
    *
    * @var string[]
    */
    protected static $getters = [
            'fileMode' => 'getFileMode',
            'dirMode' => 'getDirMode',
            'uid' => 'getUid',
            'gid' => 'getGid'
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
        $this->container['fileMode'] = isset($data['fileMode']) ? $data['fileMode'] : null;
        $this->container['dirMode'] = isset($data['dirMode']) ? $data['dirMode'] : null;
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['gid'] = isset($data['gid']) ? $data['gid'] : null;
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
    * Gets fileMode
    *  导入的文件权限。取值范围是0到777。  第一位表示文件所有者的权限，取值范围是0到7；第二位表示文件所属用户组的权限，取值范围是0到7；第三位表示其他用户的权限，取值范围是0到7。文件所有者由uid指定，文件所属用户组由gid指定，不是文件所有者且不在文件所属用户组的用户为其他用户。  数字4、2、1分别表示读、写、执行权限，这些数字相加，即可得到所需的权限组合。例如：750中第一位7代表该文件所有者对该文件具有读、写、执行权限；第二位5代表该文件所属用户组对该文件具有读、执行权限；第三位0代表其他用户对该文件无权限。
    *
    * @return int|null
    */
    public function getFileMode()
    {
        return $this->container['fileMode'];
    }

    /**
    * Sets fileMode
    *
    * @param int|null $fileMode 导入的文件权限。取值范围是0到777。  第一位表示文件所有者的权限，取值范围是0到7；第二位表示文件所属用户组的权限，取值范围是0到7；第三位表示其他用户的权限，取值范围是0到7。文件所有者由uid指定，文件所属用户组由gid指定，不是文件所有者且不在文件所属用户组的用户为其他用户。  数字4、2、1分别表示读、写、执行权限，这些数字相加，即可得到所需的权限组合。例如：750中第一位7代表该文件所有者对该文件具有读、写、执行权限；第二位5代表该文件所属用户组对该文件具有读、执行权限；第三位0代表其他用户对该文件无权限。
    *
    * @return $this
    */
    public function setFileMode($fileMode)
    {
        $this->container['fileMode'] = $fileMode;
        return $this;
    }

    /**
    * Gets dirMode
    *  导入的目录权限。取值范围是0到777。  第一位表示目录所有者的权限，取值范围是0到7；第二位表示目录所属用户组的权限，取值范围是0到7；第三位表示其他用户的权限，取值范围是0到7。目录所有者由uid指定，目录所属用户组由gid指定，不是目录所有者且不在目录所属用户组的用户为其他用户。  数字4、2、1分别表示读、写、执行权限，这些数字相加，即可得到所需的权限组合。例如：750中第一位7代表该目录所有者对该目录具有读、写、执行权限；第二位5代表该目录所属用户组对该目录具有读、执行权限；第三位0代表其他用户对该文件无权限。
    *
    * @return int|null
    */
    public function getDirMode()
    {
        return $this->container['dirMode'];
    }

    /**
    * Sets dirMode
    *
    * @param int|null $dirMode 导入的目录权限。取值范围是0到777。  第一位表示目录所有者的权限，取值范围是0到7；第二位表示目录所属用户组的权限，取值范围是0到7；第三位表示其他用户的权限，取值范围是0到7。目录所有者由uid指定，目录所属用户组由gid指定，不是目录所有者且不在目录所属用户组的用户为其他用户。  数字4、2、1分别表示读、写、执行权限，这些数字相加，即可得到所需的权限组合。例如：750中第一位7代表该目录所有者对该目录具有读、写、执行权限；第二位5代表该目录所属用户组对该目录具有读、执行权限；第三位0代表其他用户对该文件无权限。
    *
    * @return $this
    */
    public function setDirMode($dirMode)
    {
        $this->container['dirMode'] = $dirMode;
        return $this;
    }

    /**
    * Gets uid
    *  导入对象所有者的用户id，默认值是0，取值范围是0到4,294,967,294（即2^32-2）。
    *
    * @return int|null
    */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
    * Sets uid
    *
    * @param int|null $uid 导入对象所有者的用户id，默认值是0，取值范围是0到4,294,967,294（即2^32-2）。
    *
    * @return $this
    */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;
        return $this;
    }

    /**
    * Gets gid
    *  导入对象所属用户组id，默认值是0，取值范围是0到4,294,967,294（即2^32-2）。
    *
    * @return int|null
    */
    public function getGid()
    {
        return $this->container['gid'];
    }

    /**
    * Sets gid
    *
    * @param int|null $gid 导入对象所属用户组id，默认值是0，取值范围是0到4,294,967,294（即2^32-2）。
    *
    * @return $this
    */
    public function setGid($gid)
    {
        $this->container['gid'] = $gid;
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

