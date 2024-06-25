<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $question_id
 * @property-read int $is_true
 * @property int $score
 * @property string $answer
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Question $question
 * @method static \Illuminate\Database\Eloquent\Builder|Answer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Answer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Answer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Answer whereAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Answer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Answer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Answer whereIsTrue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Answer whereQuestionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Answer whereScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Answer whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Answer extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $session_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Course|null $course
 * @property-read \App\Models\Session $session
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance query()
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereSessionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attendance whereCourseId($value)
 * @mixin \Eloquent
 * @property int $course_id
 */
	class Attendance extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $category
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property array $attachment
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Course> $courses
 * @property-read int|null $courses_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereAttachment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property string $thumbnail
 * @property string $progress
 * @property string $content
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $category_id
 * @property-read \App\Models\User $author
 * @property-read \App\Models\Category|null $category
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Session> $sessions
 * @property-read int|null $sessions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Course newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Course newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Course onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Course query()
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereProgress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereThumbnail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Course withoutTrashed()
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\CourseAttachement> $attachments
 * @property-read int|null $attachments_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\UserCourse> $userCourses
 * @property-read int|null $user_courses_count
 * @mixin \Eloquent
 */
	class Course extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $course_id
 * @property string $attachment
 * @property string $url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Course $course
 * @method static \Illuminate\Database\Eloquent\Builder|CourseAttachement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseAttachement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseAttachement query()
 * @method static \Illuminate\Database\Eloquent\Builder|CourseAttachement whereAttachment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseAttachement whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseAttachement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseAttachement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseAttachement whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CourseAttachement whereUrl($value)
 * @mixin \Eloquent
 */
	class CourseAttachement extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $user_id
 * @property string $filename
 * @property string $attachment
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|MediaLibrary newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MediaLibrary newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MediaLibrary query()
 * @method static \Illuminate\Database\Eloquent\Builder|MediaLibrary whereAttachment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaLibrary whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaLibrary whereFilename($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaLibrary whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaLibrary whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MediaLibrary whereUserId($value)
 * @mixin \Eloquent
 */
	class MediaLibrary extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $test_id
 * @property string $answer_type
 * @property string $question
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Answer> $answers
 * @property-read int|null $answers_count
 * @property-read \App\Models\Test $test
 * @method static \Illuminate\Database\Eloquent\Builder|Question newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Question newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Question query()
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereAnswerType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereTestId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Question extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $course_id
 * @property int|null $pre_test_id
 * @property int|null $post_test_id
 * @property string $title
 * @property string $content
 * @property string $start
 * @property string $end
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\SessionAttachement> $attachments
 * @property-read int|null $attachments_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Attendance> $attendances
 * @property-read int|null $attendances_count
 * @property-read \App\Models\Course $course
 * @property-read \App\Models\Test|null $postTest
 * @property-read \App\Models\Test|null $preTest
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\TestResult> $testResult
 * @property-read int|null $test_result_count
 * @method static \Illuminate\Database\Eloquent\Builder|Session newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Session newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Session onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Session query()
 * @method static \Illuminate\Database\Eloquent\Builder|Session whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session whereEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session wherePostTestId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session wherePreTestId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session whereStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Session withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Session withoutTrashed()
 * @mixin \Eloquent
 * @property-read \App\Models\Attendance|null $attendance
 */
	class Session extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $course_session_id
 * @property string $attachment
 * @property string $url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Session|null $Session
 * @method static \Illuminate\Database\Eloquent\Builder|SessionAttachement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SessionAttachement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SessionAttachement query()
 * @method static \Illuminate\Database\Eloquent\Builder|SessionAttachement whereAttachment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SessionAttachement whereCourseSessionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SessionAttachement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SessionAttachement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SessionAttachement whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SessionAttachement whereUrl($value)
 * @mixin \Eloquent
 */
	class SessionAttachement extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property string $start
 * @property string $end
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string $content
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Session> $postTest
 * @property-read int|null $post_test_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Session> $preTest
 * @property-read int|null $pre_test_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Question> $questions
 * @property-read int|null $questions_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Test newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Test newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Test onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Test query()
 * @method static \Illuminate\Database\Eloquent\Builder|Test whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Test whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Test whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Test whereEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Test whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Test whereStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Test whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Test whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Test whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Test withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Test withoutTrashed()
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\TestResult> $result
 * @property-read int|null $result_count
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\TestResult> $postTestResult
 * @property-read int|null $post_test_result_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\TestResult> $preTestResult
 * @property-read int|null $pre_test_result_count
 */
	class Test extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $test_number
 * @property int $course_id
 * @property int $session_id
 * @property int|null $pre_test_id
 * @property int|null $post_test_id
 * @property int $question_id
 * @property int|null $answer_id
 * @property int $user_id
 * @property string|null $answer
 * @property string|null $score
 * @property string|null $notes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $is_checked
 * @property-read \App\Models\Answer|null $answered
 * @property-read \App\Models\User|null $author
 * @property-read \App\Models\Course $course
 * @property-read \App\Models\Test|null $postTest
 * @property-read \App\Models\Test|null $preTest
 * @property-read \App\Models\Question $question
 * @property-read \App\Models\Session $session
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $user
 * @property-read int|null $user_count
 * @method static \Illuminate\Database\Eloquent\Builder|TestResult newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TestResult newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TestResult query()
 * @method static \Illuminate\Database\Eloquent\Builder|TestResult whereAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestResult whereAnswerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestResult whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestResult whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestResult whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestResult whereIsChecked($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestResult whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestResult wherePostTestId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestResult wherePreTestId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestResult whereQuestionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestResult whereScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestResult whereSessionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestResult whereTestNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestResult whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestResult whereUserId($value)
 * @mixin \Eloquent
 */
	class TestResult extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string $role
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $two_factor_recovery_codes
 * @property-read int $two_factor_enabled
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Attendance> $attendances
 * @property-read int|null $attendances_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Rawilk\ProfileFilament\Models\AuthenticatorApp> $authenticatorApps
 * @property-read int|null $authenticator_apps_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Rawilk\ProfileFilament\Models\WebauthnKey> $nonPasskeyWebauthnKeys
 * @property-read int|null $non_passkey_webauthn_keys_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Rawilk\ProfileFilament\Models\WebauthnKey> $passkeys
 * @property-read int|null $passkeys_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Session> $sessions
 * @property-read int|null $sessions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\TestResult> $testResult
 * @property-read int|null $test_result_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Test> $tests
 * @property-read int|null $tests_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Rawilk\ProfileFilament\Models\WebauthnKey> $webauthnKeys
 * @property-read int|null $webauthn_keys_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorRecoveryCodes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\UserCourse> $courses
 * @property-read int|null $courses_count
 * @mixin \Eloquent
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property int $course_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Course $course
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|UserCourse newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserCourse newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserCourse query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserCourse whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserCourse whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserCourse whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserCourse whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserCourse whereUserId($value)
 * @mixin \Eloquent
 */
	class UserCourse extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property string $sumbawa
 * @property string $indonesia
 * @property string $inggris
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Vocabulary newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vocabulary newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vocabulary query()
 * @method static \Illuminate\Database\Eloquent\Builder|Vocabulary whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vocabulary whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vocabulary whereIndonesia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vocabulary whereInggris($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vocabulary whereSumbawa($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vocabulary whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vocabulary whereUserId($value)
 * @mixin \Eloquent
 */
	class Vocabulary extends \Eloquent {}
}

